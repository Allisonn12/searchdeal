@include('admin.partials.header')

    <div class="admin-main">
        @include('admin.partials.nav')

        <main class="dashboard-content">
            <div class="container-fluid px-3 px-lg-4 py-4">
                <div class="page-heading">
                    <div class="page-heading-copy">
                        <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
                        <div>
                            <p class="eyebrow mb-1">Overview</p>
                            <h1 class="h3 mb-1">Dashboard</h1>
                            <p class="text-muted mb-0">Monitor performance, sales, users, and support from one clean workspace.</p>
                        </div>
                    </div>
                    <div class="heading-actions"><button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi bi-download" aria-hidden="true"></i> Export</button><button class="btn btn-primary btn-sm" type="button"><i class="bi bi-file-earmark-plus" aria-hidden="true"></i> Create Report</button></div>
                </div>

                <section class="row g-3 mt-1" aria-label="Dashboard metrics">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <article class="metric-card metric-primary">
                            <div class="metric-top">
                                <span class="metric-label">Total Leads</span>
                                <span class="metric-icon"><i class="bi bi-people-fill" aria-hidden="true"></i></span>
                            </div>
                            <div class="metric-value">{{ number_format($totalLeads) }}</div>
                            <div class="metric-meta">
                                <span>across all leads</span>
                            </div>
                        </article>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <article class="metric-card metric-success">
                            <div class="metric-top">
                                <span class="metric-label">Today's Leads</span>
                                <span class="metric-icon"><i class="bi bi-calendar-check" aria-hidden="true"></i></span>
                            </div>
                            <div class="metric-value">{{ number_format($todaysLeads) }}</div>
                            <div class="metric-meta">
                                <span>submitted today</span>
                            </div>
                        </article>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <article class="metric-card metric-warning">
                            <div class="metric-top">
                                <span class="metric-label">Pending</span>
                                <span class="metric-icon"><i class="bi bi-hourglass-split" aria-hidden="true"></i></span>
                            </div>
                            <div class="metric-value">{{ number_format($pendingLeads) }}</div>
                            <div class="metric-meta">
                                <span class="text-warning">awaiting processing</span>
                            </div>
                        </article>
                    </div>

                    <div class="col-12 col-sm-6 col-xl-3">
                        <article class="metric-card metric-danger">
                            <div class="metric-top">
                                <span class="metric-label">Failed</span>
                                <span class="metric-icon"><i class="bi bi-x-circle" aria-hidden="true"></i></span>
                            </div>
                            <div class="metric-value">{{ number_format($failedLeads) }}</div>
                            <div class="metric-meta">
                                <span class="text-danger">need review</span>
                            </div>
                        </article>
                    </div>
                </section>

                <section class="row g-3 mt-1">
                    <div class="col-12 col-xl-8">
                        <div class="panel">
                            <div class="panel-header">
                                <div>
                                    <h2 class="h5 mb-1 section-title"><i class="bi bi-graph-up-arrow" aria-hidden="true"></i><span>Lead Volume</span></h2>
                                    <p class="text-muted mb-0">Total leads submitted per month across all products.</p>
                                </div>
                                <a class="btn btn-light btn-sm" href="charts.html">View Details</a>
                            </div>

                            <div class="chart-bars" aria-label="Monthly lead volume chart">
                                @foreach ($monthlyLeads as $month)
                                    @php
                                        // Scale bar height 10–100 relative to the busiest month.
                                        $pct = $maxMonthly > 0
                                            ? max(10, (int) round(($month->count / $maxMonthly) * 100))
                                            : 10;
                                    @endphp
                                    <div class="chart-column bar-{{ $pct }}" title="{{ $month->label }}: {{ $month->count }} leads">
                                        <span></span>
                                        <small>{{ $month->label }}</small>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-4">
                        <div class="panel h-100">
                            <div class="panel-header">
                                <div>
                                    <h2 class="h5 mb-1 section-title"><i class="bi bi-activity" aria-hidden="true"></i><span>Team Activity</span></h2>
                                    <p class="text-muted mb-0">Recent operational updates.</p>
                                </div>
                            </div>

                            <div class="activity-list">
                                <div class="activity-item"><span class="activity-dot bg-primary"></span><div><p class="mb-1 fw-semibold">New campaign launched</p><p class="text-muted small mb-0">Marketing team published the May offer.</p></div></div>
                                <div class="activity-item"><span class="activity-dot bg-success"></span><div><p class="mb-1 fw-semibold">Payment batch cleared</p><p class="text-muted small mb-0">246 invoices were processed successfully.</p></div></div>
                                <div class="activity-item"><span class="activity-dot bg-warning"></span><div><p class="mb-1 fw-semibold">Support queue rising</p><p class="text-muted small mb-0">Average first response time is 18 minutes.</p></div></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="panel mt-3">
                    <div class="panel-header">
                        <div>
                            <h2 class="h5 mb-1 section-title"><i class="bi bi-clock-history" aria-hidden="true"></i><span>Recent Leads</span></h2>
                            <p class="text-muted mb-0">Latest submissions across all products.</p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Submitted</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recentLeads as $lead)
                                    @php
                                        $statusMap = [
                                            'success'   => 'text-bg-success',
                                            'pending'   => 'text-bg-warning',
                                            'failed'    => 'text-bg-danger',
                                            'duplicate' => 'text-bg-secondary',
                                        ];
                                        $badgeClass = $statusMap[$lead->status] ?? 'text-bg-secondary';
                                    @endphp
                                    <tr>
                                        <td class="fw-semibold">{{ $lead->name }}</td>
                                        <td>
                                            <p class="mb-0">{{ $lead->email }}</p>
                                            <p class="text-muted small mb-0">{{ $lead->phone }}</p>
                                        </td>
                                        <td><span class="badge text-bg-secondary">{{ $lead->source }}</span></td>
                                        <td><span class="badge {{ $badgeClass }}">{{ ucfirst($lead->status) }}</span></td>
                                        <td>{{ $lead->created_at ? $lead->created_at->format('M j, Y H:i') : '—' }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">No leads found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>




@include('admin.partials.footer')


{{--<!DOCTYPE html>--}}
{{--<html lang="en" class="scroll-smooth">--}}
{{--<head>--}}
{{--  <meta charset="UTF-8" />--}}
{{--  <meta name="viewport" content="width=device-width, initial-scale=1.0" />--}}
{{--  <title>Admin Dashboard — SearchADeal</title>--}}
{{--  <script>--}}
{{--    tailwind.config = {--}}
{{--      theme: { extend: { colors: { primary: '#0f172a', accent: '#E23E3E' } } }--}}
{{--    }--}}
{{--  </script>--}}
{{--  <script src="https://cdn.tailwindcss.com"></script>--}}
{{--</head>--}}
{{--<body class="min-h-screen bg-slate-100 font-sans">--}}

{{--  <header class="bg-primary text-white px-8 py-4 flex items-center justify-between">--}}
{{--    <span class="font-bold text-lg tracking-tight">SearchADeal — Admin</span>--}}
{{--    <form method="POST" action="{{ route('admin.logout') }}">--}}
{{--      @csrf--}}
{{--      <button type="submit" class="text-sm hover:text-red-400 transition-colors">--}}
{{--        Sign out--}}
{{--      </button>--}}
{{--    </form>--}}
{{--  </header>--}}

{{--  <main class="px-8 py-10">--}}
{{--    <h1 class="text-2xl font-bold text-primary mb-2">Dashboard</h1>--}}
{{--    <p class="text-slate-500 text-sm">Welcome back, {{ Auth::guard('admin')->user()->name }}.</p>--}}
{{--  </main>--}}

{{--</body>--}}
{{--</html>--}}

