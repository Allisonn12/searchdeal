<?php

namespace App\Services;

use App\Models\CarInsureModel;
use App\Models\DebtModel;
use App\Models\CarInsuranceLead;
use App\Models\CarTrackerLead;
use App\Models\KaruCrmLead;
use App\Models\LifeModel;
use App\Models\LoanModel;
use App\Models\MedicalModel;
use App\Models\MotorModel;
use App\Models\TrackerModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class DashboardService
{
  /**
   * Every lead-bearing model in the platform.
   * Add new models here — nothing else needs to change.
   */
  private array $models = [
    'Car Insurance Site' => CarInsureModel::class,
    'Debt'          => DebtModel::class,
    'Car Insurance Leads' => CarInsuranceLead::class,
    'Car Tracker Leads'   => CarTrackerLead::class,
    'Karu CRM'      => KaruCrmLead::class,
    'Life'          => LifeModel::class,
    'Loans'         => LoanModel::class,
    'Medical'       => MedicalModel::class,
    'Motor'         => MotorModel::class,
    'Tracker'       => TrackerModel::class,
  ];

  // ---------------------------------------------------------------------------
  // Metric card aggregates
  // ---------------------------------------------------------------------------

  /** Total leads across every table. */
  public function totalLeads(): int
  {
    return $this->sumAcrossModels(fn ($model) => $model::count());
  }

  /** Leads submitted today across every table. */
  public function todaysLeads(): int
  {
    return $this->sumAcrossModels(
      fn ($model) => $model::whereDate('created_at', today())->count()
    );
  }

  /** Leads with status = pending across every table. */
  public function pendingLeads(): int
  {
    return $this->sumAcrossModels(
      fn ($model) => $model::where('status', 'pending')->count()
    );
  }

  /** Leads with status = failed across every table. */
  public function failedLeads(): int
  {
    return $this->sumAcrossModels(
      fn ($model) => $model::where('status', 'failed')->count()
    );
  }

  // ---------------------------------------------------------------------------
  // Chart — monthly lead volume for the last 6 months
  // ---------------------------------------------------------------------------

  /**
   * Returns a Collection of objects with `label` (e.g. "Jan") and `count`.
   * The caller converts counts to bar heights by comparing against the max.
   *
   * @return Collection<int, object{label: string, count: int}>
   */
  public function monthlyLeads(int $months = 6): Collection
  {
    return collect(range($months - 1, 0))
      ->map(function (int $offset) {
        $date = now()->subMonths($offset);

        $count = $this->sumAcrossModels(
          fn ($model) => $model::whereYear('created_at', $date->year)
                               ->whereMonth('created_at', $date->month)
                               ->count()
        );

        return (object) [
          'label' => $date->format('M'),
          'count' => $count,
        ];
      });
  }

  // ---------------------------------------------------------------------------
  // Recent leads feed
  // ---------------------------------------------------------------------------

  /**
   * Returns the most recent $limit leads across all sources, merged and
   * sorted by created_at descending, each normalised to a plain object so
   * the view never has to branch on model type.
   *
   * @return Collection<int, object>
   */
  public function recentLeads(int $limit = 10): Collection
  {
    $all = collect();

    foreach ($this->models as $source => $model) {
      $rows = $model::latest()->limit($limit)->get();

      $rows->each(function ($lead) use ($source, $all) {
        // KaruCrmLead stores a single 'name' column; all others use firstname/lastname.
        $name = isset($lead->name)
          ? $lead->name
          : trim(($lead->firstname ?? '') . ' ' . ($lead->lastname ?? ''));

        // Phone column varies across models.
        $phone = $lead->phone ?? $lead->phone1 ?? null;

        $all->push((object) [
          'name'       => $name ?: '—',
          'email'      => $lead->email ?? '—',
          'phone'      => $phone ?? '—',
          'source'     => $source,
          'status'     => $lead->status ?? 'unknown',
          'created_at' => $lead->created_at,
        ]);
      });
    }

    return $all->sortByDesc('created_at')->take($limit)->values();
  }

  // ---------------------------------------------------------------------------
  // Private helpers
  // ---------------------------------------------------------------------------

  /**
   * Run a callback against every model class and sum the integer results.
   *
   * @param  callable(class-string): int $callback
   */
  private function sumAcrossModels(callable $callback): int
  {
    return (int) collect(array_values($this->models))
      ->sum($callback);
  }
}
