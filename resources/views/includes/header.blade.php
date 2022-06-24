<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{route('home')}}">
                <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <div class="dropdown d-none">
                    <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                        <i class="fe fe-search"></i>
                    </a>
                    <div class="dropdown-menu header-search dropdown-menu-start">
                        <div class="input-group w-100 p-2">
                            <input type="text" class="form-control" placeholder="Search....">
                            <div class="input-group-text btn btn-primary">
                                <i class="fe fe-search" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            {{-- <div class="dropdown  d-flex message">
                                <a class="nav-link icon text-center" data-bs-toggle="dropdown" id="btn_saldo">
                                    <i class="fe fe-message-square"></i><span class="pulse-danger"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading border-bottom">
                                        <div class="d-flex">
                                            <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Sisa Saldo Anda</h6>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="text-muted p-0 fs-12"
                                                    id="sisa_saldo"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}
                            <!-- MESSAGE-BOX -->
                            {{-- <div class="dropdown d-flex header-settings">
                                <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="sidebar-right"
                                    data-target=".sidebar-right">
                                    <i class="fe fe-align-right"></i>
                                </a>
                            </div> --}}
                            <!-- SIDE-MENU -->
                            <div class="dropdown d-flex profile-1">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                    class="nav-link leading-none d-flex">
                                    <img src="{{ asset('assets/images/users/21.jpg') }}" alt="profile-user"
                                        class="avatar  profile-user brround cover-image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="drop-heading">
                                        <div class="text-center">
                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">{{Auth::user()->name}}</h5>
                                            <small class="text-muted">{{Auth::user()->role}}</small>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0);" id="btn_logout">
                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
