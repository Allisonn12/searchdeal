@include('admin.partials.header')
    <div class="admin-main">
        @include('admin.partials.nav')

        <main class="dashboard-content">
            <div class="container-fluid px-3 px-lg-4 py-4">
                <div class="page-heading">
                    <div class="page-heading-copy">
                        <span class="page-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
                        <div>
                            <p class="eyebrow mb-1">Data</p>
                            <h1 class="h3 mb-1">Tables</h1>
                            <p class="text-muted mb-0">Use responsive, searchable tables for operational records.</p>
                        </div>
                    </div>

                </div>

                <section class="panel">
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title">
                                <i class="bi bi-table" aria-hidden="true">

                                </i><span>Advanced Table</span>
                            </h2><p class="text-muted mb-0">Searchable responsive table for orders and customer data.</p>
                        </div><input class="form-control form-control-sm table-search" type="search" placeholder="Search leads" data-table-search="ordersTable" aria-label="Search leads"></div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0" id="ordersTable" data-searchable-table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Campaign</th>
                                    <th>Vehicle</th>
                                    <th>Preferred Call Time</th>
                                    <th>Status</th>
                                    <th>Submitted</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($leads as $lead)
                                    <tr>
                                        <td class="fw-semibold">{{ $lead->id }}</td>
                                        <td>{{ $lead->firstname }} {{ $lead->lastname }}</td>
                                        <td>{{ $lead->email }}</td>
                                        <td>{{ $lead->phone }}</td>
                                        <td><span class="badge text-bg-secondary">{{ $lead->campaign_code ?? '—' }}</span></td>
                                        <td>
                                            @if ($lead->car_make || $lead->car_model || $lead->car_year)
                                                {{ implode(' ', array_filter([$lead->car_year, $lead->car_make, $lead->car_model])) }}
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>{{ $lead->preferred_call_time ?? '—' }}</td>
                                        <td>
                                            @php
                                                $statusMap = [
                                                    'success' => 'text-bg-success',
                                                    'pending' => 'text-bg-warning',
                                                    'failed'  => 'text-bg-danger',
                                                ];
                                                $badgeClass = $statusMap[$lead->status] ?? 'text-bg-secondary';
                                            @endphp
                                            <span class="badge {{ $badgeClass }}">
                                                {{ ucfirst($lead->status ?? 'unknown') }}
                                            </span>
                                        </td>
                                        <td>{{ $lead->created_at->format('M j, Y H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-muted py-4">No leads found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Pagination controls — only rendered when there is more than one page --}}
                    @if ($leads->hasPages())
                        <div class="d-flex justify-content-between align-items-center px-3 py-2 border-top">
                            <p class="text-muted small mb-0">
                                Showing {{ $leads->firstItem() }}–{{ $leads->lastItem() }} of {{ $leads->total() }} leads
                            </p>
                            {{ $leads->links() }}
                        </div>
                    @endif
                </section>
            </div>
        </main>

        @include('admin.partials.footer')
