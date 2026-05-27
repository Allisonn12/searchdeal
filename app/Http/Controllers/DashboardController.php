<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function __construct(private readonly DashboardService $dashboard) {}

  public function __invoke(Request $request)
  {
    $monthlyLeads = $this->dashboard->monthlyLeads();
    $maxMonthly   = $monthlyLeads->max('count') ?: 1;

    return view('admin.dashboard', [
      'totalLeads'   => $this->dashboard->totalLeads(),
      'todaysLeads'  => $this->dashboard->todaysLeads(),
      'pendingLeads' => $this->dashboard->pendingLeads(),
      'failedLeads'  => $this->dashboard->failedLeads(),
      'monthlyLeads' => $monthlyLeads,
      'maxMonthly'   => $maxMonthly,
      'recentLeads'  => $this->dashboard->recentLeads(10),
    ]);
  }
}
