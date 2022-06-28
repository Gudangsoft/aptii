<nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
    <div class="container-fluid custom-container">
        <a class="navbar-brand text-dark fw-bold me-auto" href="index.html">
            <img src="{{ asset('frontend') }}/assets/images/logo-dark.png" height="22" alt="" class="logo-dark" />
            <img src="{{ asset('frontend') }}/assets/images/logo-light.png" height="22" alt="" class="logo-light" />
        </a>
        <div>
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center">
                <li class="nav-item">
                    <a class="nav-link" href="/" id="homedrop">
                        Home
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link" href="javascript:void(0)" id="jobsdropdown" role="button" data-bs-toggle="dropdown">
                        Company <div class="arrow-down"></div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="jobsdropdown">
                        <li><a class="dropdown-item" href="about.html">About Us</a></li>
                        <li><a class="dropdown-item" href="services.html">Services</a></li>
                        <li><a class="dropdown-item" href="team.html">Team</a></li>
                        <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                        <a class="dropdown-item" href="privacy-policy.html">Priacy & Policy</a>
                        <li><a class="dropdown-item" href="faqs.html">Faqs</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link" href="javascript:void(0)" id="pagesdoropdown" role="button" data-bs-toggle="dropdown">
                        Pages
                        <div class="arrow-down"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center" aria-labelledby="pagesdoropdown">
                        <div class="row">
                            <div class="col-lg-4">
                                <span class="dropdown-header">Jobs</span>
                                <div>
                                    <a class="dropdown-item" href="job-list.html">Job List</a>
                                    <a class="dropdown-item" href="job-list-2.html">Job List-2</a>
                                    <a class="dropdown-item" href="job-grid.html">Job Grid</a>
                                    <a class="dropdown-item" href="job-grid-2.html">Job Grid-2</a>
                                    <a class="dropdown-item" href="job-details.html">Job Details</a>
                                    <a class="dropdown-item" href="job-categories.html">Jobs Categories</a>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <span class="dropdown-header">Candidates / Companys</span>
                                <div>
                                    <a class="dropdown-item" href="candidate-list.html">Candidate List</a>
                                    <a class="dropdown-item" href="candidate-grid.html">Candidate Grid</a>
                                    <a class="dropdown-item" href="candidate-details.html">Candidate Details</a>
                                    <a class="dropdown-item" href="company-list.html">Company List</a>
                                    <a class="dropdown-item" href="company-details.html">Company Details</a>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-4">
                                <span class="dropdown-header">Extra Pages</span>
                                <div>
                                    <a class="dropdown-item" href="sign-up.html">Sign Up</a>
                                    <a class="dropdown-item" href="sign-in.html">Sign In</a>
                                    <a class="dropdown-item" href="sign-out.html">Sign Out</a>
                                    <a class="dropdown-item" href="reset-password.html">Reset Password</a>
                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                    <a class="dropdown-item" href="404-error.html">404 Error</a>
                                    <a class="dropdown-item" href="components.html">Components</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
        <ul class="header-menu list-inline d-flex align-items-center mb-0">
            @if (Auth::check())
                <li class="list-inline-item dropdown">
                    <a href="javascript:void(0)" class="header-item" id="userdropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('frontend') }}/assets/images/profile.jpg" alt="mdo" width="35" height="35" class="rounded-circle me-1"> <span class="d-none d-md-inline-block fw-medium">Hi, Jansh</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                        @role('super admin|writer|admin')
                        <li><a class="dropdown-item" href="/admin">Admin</a></li>
                        @endrole
                        <li><a class="dropdown-item" href="bookmark-jobs.html">Bookmarks Jobs</a></li>
                        <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit(); " role="button">
                                    <i class="mr-50" data-feather="power"></i>

                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </form>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>
