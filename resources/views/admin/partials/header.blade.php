<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a class="logo logo-dark" href="index.html">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
                </a>
                <a class="logo logo-light" href="index.html">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-light.svg') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="19">
                    </span>
                </a>
            </div>

            <button class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn" type="button">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input class="form-control" type="text" placeholder="Search...">
                    <span class="bx bx-search-alt"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button class="btn header-item waves-effect" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                    <img id="header-lang-img" src="{{ asset('') }}assets/images/flags/us.jpg" alt="Header Language" height="16">
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a class="dropdown-item notify-item language" data-lang="en" href="javascript:void(0);">
                        <img class="me-1" src="{{ asset('') }}assets/images/flags/us.jpg" alt="user-image" height="12"> <span class="align-middle">English</span>
                    </a>
                    <!-- item-->
                    <a class="dropdown-item notify-item language" data-lang="sp" href="javascript:void(0);">
                        <img class="me-1" src="{{ asset('') }}assets/images/flags/spain.jpg" alt="user-image" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a class="dropdown-item notify-item language" data-lang="gr" href="javascript:void(0);">
                        <img class="me-1" src="{{ asset('') }}assets/images/flags/germany.jpg" alt="user-image" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a class="dropdown-item notify-item language" data-lang="it" href="javascript:void(0);">
                        <img class="me-1" src="{{ asset('') }}assets/images/flags/italy.jpg" alt="user-image" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a class="dropdown-item notify-item language" data-lang="ru" href="javascript:void(0);">
                        <img class="me-1" src="{{ asset('') }}assets/images/flags/russia.jpg" alt="user-image" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="{{ asset('') }}assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen" type="button">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a class="small" href="#!" key="t-view-all"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a class="text-reset notification-item" href="javascript: void(0);">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="text-reset notification-item" href="javascript: void(0);">
                            <div class="d-flex">
                                <img class="me-3 rounded-circle avatar-xs" src="{{ asset('') }}assets/images/users/avatar-3.jpg" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="text-reset notification-item" href="javascript: void(0);">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="text-reset notification-item" href="javascript: void(0);">
                            <div class="d-flex">
                                <img class="me-3 rounded-circle avatar-xs" src="{{ asset('') }}assets/images/users/avatar-4.jpg" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" type="button" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('') }}assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ auth('admin')->user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">{{ __('My Profile') }}</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">{{ __('Change Password') }}</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">{{ __('Logout') }}</span></a>
                </div>
            </div>
        </div>
    </div>
</header>
