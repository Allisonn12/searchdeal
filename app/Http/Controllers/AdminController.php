<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use App\Services\DashboardService;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreRequest;
use App\Http\Requests\Admin\UpdateRequest;

class AdminController extends Controller
{
  public function __construct(private readonly DashboardService $dashboard) {}

  public function index()
  {
    $monthlyLeads = $this->dashboard->monthlyLeads();

    return view('admin.dashboard', [
      'totalLeads'   => $this->dashboard->totalLeads(),
      'todaysLeads'  => $this->dashboard->todaysLeads(),
      'pendingLeads' => $this->dashboard->pendingLeads(),
      'failedLeads'  => $this->dashboard->failedLeads(),
      'monthlyLeads' => $monthlyLeads,
      'maxMonthly'   => $monthlyLeads->max('count') ?: 1,
      'recentLeads'  => $this->dashboard->recentLeads(10),
    ]);
  }

  public function store(StoreRequest $request)
  {
    $data = $request->validated();

    AdminModel::create($data);

    return response()->json(['message' => 'Admin created successfully'], 201);
  }

  public function update(UpdateRequest $request, AdminModel $admin)
  {
    $data = $request->validated();

    $admin->update($data);

    return response()->json(['message' => 'Admin updated successfully']);
  }

  public function destroy(AdminModel $admin)
  {
    $admin->delete();

    return response()->json(['message' => 'Admin deleted successfully']);
  }

}
