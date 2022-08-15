@section('title')
    PROSIDING -
@endsection
<x-master-layouts>
@include('sweetalert::alert')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="app-user-list">
                <div class="row match-height">

                    <!-- Developer Meetup Card -->
                    <div class="col-lg-8 col-md-6 col-12">
                        @include('admin.widget.home', ['data' => $data['home']])
                    </div>
                    <!--/ Developer Meetup Card -->

                    <!-- Browser States Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('admin.widget.add_friends', ['users' => $friendListAdd])
                    </div>
                    <!--/ Browser States Card -->

                    <!-- Browser States Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-browser-states">
                            <div class="card-header">
                                <div>
                                    <h4 class="card-title">Browser States</h4>
                                    <p class="card-text font-small-2">Counter August 2020</p>
                                </div>
                                <div class="dropdown chart-dropdown">
                                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="browser-states">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/icons/google-chrome.png" class="rounded mr-1" height="30" alt="Google Chrome" />
                                        <h6 class="align-self-center mb-0">Google Chrome</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold text-body-heading mr-1">54.4%</div>
                                        <div id="browser-state-chart-primary"></div>
                                    </div>
                                </div>
                                <div class="browser-states">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/icons/mozila-firefox.png" class="rounded mr-1" height="30" alt="Mozila Firefox" />
                                        <h6 class="align-self-center mb-0">Mozila Firefox</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold text-body-heading mr-1">6.1%</div>
                                        <div id="browser-state-chart-warning"></div>
                                    </div>
                                </div>
                                <div class="browser-states">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/icons/apple-safari.png" class="rounded mr-1" height="30" alt="Apple Safari" />
                                        <h6 class="align-self-center mb-0">Apple Safari</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold text-body-heading mr-1">14.6%</div>
                                        <div id="browser-state-chart-secondary"></div>
                                    </div>
                                </div>
                                <div class="browser-states">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/icons/internet-explorer.png" class="rounded mr-1" height="30" alt="Internet Explorer" />
                                        <h6 class="align-self-center mb-0">Internet Explorer</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold text-body-heading mr-1">4.2%</div>
                                        <div id="browser-state-chart-info"></div>
                                    </div>
                                </div>
                                <div class="browser-states">
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/icons/opera.png" class="rounded mr-1" height="30" alt="Opera Mini" />
                                        <h6 class="align-self-center mb-0">Opera Mini</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="font-weight-bold text-body-heading mr-1">8.4%</div>
                                        <div id="browser-state-chart-danger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Browser States Card -->

                    <!-- Goal Overview Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Goal Overview</h4>
                                <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                            </div>
                            <div class="card-body p-0">
                                <div id="goal-overview-radial-bar-chart" class="my-2"></div>
                                <div class="row border-top text-center mx-0">
                                    <div class="col-6 border-right py-1">
                                        <p class="card-text text-muted mb-0">Completed</p>
                                        <h3 class="font-weight-bolder mb-0">786,617</h3>
                                    </div>
                                    <div class="col-6 py-1">
                                        <p class="card-text text-muted mb-0">In Progress</p>
                                        <h3 class="font-weight-bolder mb-0">13,561</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Goal Overview Card -->

                    <!-- Transaction Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-transaction">
                            <div class="card-header">
                                <h4 class="card-title">Transactions</h4>
                                <div class="dropdown chart-dropdown">
                                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-primary rounded">
                                            <div class="avatar-content">
                                                <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Wallet</h6>
                                            <small>Starbucks</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-danger">- $74</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-success rounded">
                                            <div class="avatar-content">
                                                <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Bank Transfer</h6>
                                            <small>Add Money</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-success">+ $480</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-danger rounded">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Paypal</h6>
                                            <small>Add Money</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-success">+ $590</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-warning rounded">
                                            <div class="avatar-content">
                                                <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Mastercard</h6>
                                            <small>Ordered Food</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-danger">- $23</div>
                                </div>
                                <div class="transaction-item">
                                    <div class="media">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="transaction-title">Transfer</h6>
                                            <small>Refund</small>
                                        </div>
                                    </div>
                                    <div class="font-weight-bolder text-success">+ $98</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Transaction Card -->
                </div>
            </section>

        </div>
    </div>
</div>
</x-master-layouts>
