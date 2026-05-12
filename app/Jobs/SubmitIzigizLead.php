<?php

namespace App\Jobs;

use App\Models\IzigizLead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SubmitIzigizLead implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * Retry 3 times total before marking permanently failed.
   * Backoff: 60s → 5 min → 15 min.
   * Handles transient outages without hammering a struggling endpoint.
   */
  public int   $tries   = 3;
  public array $backoff = [60, 300, 900];

  /**
   * Per-attempt HTTP timeout. Shorter than $tries * timeout so a slow
   * endpoint doesn't lock a worker slot for the full duration.
   */
  public int $timeout = 20;

  public function __construct(
    private readonly IzigizLead $lead,
    private readonly array $payload,
  ) {}

  public function handle(): void
  {
    // Re-fetch to catch any status change from a prior attempt.
    $lead = $this->lead->fresh();

    // Skip if a previous attempt already succeeded (e.g. race on retry).
    if ($lead->status === IzigizLead::STATUS_SUCCESS) {
      return;
    }

    $response   = Http::timeout($this->timeout)
      ->withHeaders(['Content-Type' => 'application/json'])
      ->post(config('services.izigiz.endpoint'), $this->payload);

    $httpStatus = $response->status();
    $body       = $response->json();
    $success    = in_array($httpStatus, [200, 201], true);

    $lead->update([
      'status'       => $success ? IzigizLead::STATUS_SUCCESS : IzigizLead::STATUS_FAILED,
      'api_response' => $body,
    ]);

    if (! $success) {
      Log::warning('SubmitIzigizLead: API rejected lead', [
        'lead_id'     => $lead->id,
        'http_status' => $httpStatus,
        'attempt'     => $this->attempts(),
        'response'    => $body,
      ]);

      // Re-throw so Laravel applies the backoff and retries.
      throw new \RuntimeException(
        "Izigiz API returned HTTP {$httpStatus} for lead #{$lead->id}."
      );
    }

    Log::info('SubmitIzigizLead: lead accepted', [
      'lead_id'  => $lead->id,
      'campaign' => $lead->campaign_code,
    ]);
  }

  /**
   * Called by Laravel after all retry attempts are exhausted.
   * Ensures the lead is permanently marked failed for monitoring.
   */
  public function failed(\Throwable $e): void
  {
    Log::error('SubmitIzigizLead: all retries exhausted', [
      'lead_id' => $this->lead->id,
      'error'   => $e->getMessage(),
    ]);

    $this->lead->update([
      'status'       => IzigizLead::STATUS_FAILED,
      'api_response' => ['error' => $e->getMessage(), 'exhausted' => true],
    ]);
  }
}
