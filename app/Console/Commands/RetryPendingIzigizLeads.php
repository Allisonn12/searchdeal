<?php

namespace App\Console\Commands;

use App\Models\IzigizLead;
use App\Services\IzigizService;
use Illuminate\Console\Command;

class RetryPendingIzigizLeads extends Command
{
  protected $signature = 'izigiz:retry-pending
                          {--limit=50 : Maximum number of leads to process per run}';

  protected $description = 'Retry Izigiz API submission for all leads with status pending or failed.';

  public function handle(IzigizService $service): int
  {
    $leads = IzigizLead::whereIn('status', [
      IzigizLead::STATUS_PENDING,
      IzigizLead::STATUS_FAILED,
    ])
      ->orderBy('created_at')
      ->limit((int) $this->option('limit'))
      ->get();

    if ($leads->isEmpty()) {
      $this->info('No pending or failed Izigiz leads found.');
      return self::SUCCESS;
    }

    $this->info("Processing {$leads->count()} lead(s)…");
    $bar = $this->output->createProgressBar($leads->count());
    $bar->start();

    $succeeded = 0;
    $failed    = 0;

    foreach ($leads as $lead) {
      // Rebuild the payload from the persisted DB record — no original $data needed.
      $payload = $this->buildPayloadFromLead($lead);

      $service->callApi($lead, $payload);

      $lead->refresh();
      $lead->status === IzigizLead::STATUS_SUCCESS ? $succeeded++ : $failed++;

      $bar->advance();
    }

    $bar->finish();
    $this->newLine();
    $this->info("Done. Succeeded: {$succeeded} | Still failed: {$failed}");

    return self::SUCCESS;
  }

  /**
   * Reconstruct the Izigiz payload from an IzigizLead model record.
   * This mirrors IzigizService::buildPayload() but works without the
   * original $data array (which is gone after the web request ended).
   */
  private function buildPayloadFromLead(IzigizLead $lead): array
  {
    $parameters = [
      ['Key' => 'LeadCampaignCode', 'Value' => $lead->campaign_code],
    ];

    $optionalMap = [
      'DateOfBirth'        => $lead->date_of_birth?->format('Y/m/d'),
      'CarMake'            => $lead->car_make,
      'CarModel'           => $lead->car_model,
      'CarYear'            => $lead->car_year,
      'CarUsage'           => $lead->car_usage,
      'PreferedTimeOfCall' => $lead->preferred_call_time,
    ];

    foreach ($optionalMap as $key => $value) {
      if ($value !== null && $value !== '') {
        $parameters[] = ['Key' => $key, 'Value' => (string) $value];
      }
    }

    return [
      'FirstName'  => $lead->firstname,
      'LastName'   => $lead->lastname,
      'CellNumber' => $lead->phone,
      'Email'      => $lead->email ?? '',
      'Parameters' => $parameters,
    ];
  }
}
