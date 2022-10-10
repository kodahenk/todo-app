<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">

        <!-- Left Section -->
        <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">



            <!-- User Dropdown -->
            <div class="d-inline">
                @if (Auth::check())
                    <a class="btn btn-sm btn-alt-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
            </div>
            <!-- END User Dropdown -->

            <!-- Notifications -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-flag"></i>
                    <span class="text-primary">&bull;</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications">
                    <div class="px-2 py-3 bg-body-light rounded-top">
                        <h5 class="h6 text-center mb-0">
                            Notifications
                        </h5>
                    </div>
                    <ul class="nav-items my-2 fs-sm">
                        <li>
                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                <div class="flex-shrink-0 me-2 ms-3">
                                    <i class="fa fa-fw fa-check text-success"></i>
                                </div>
                                <div class="flex-grow-1 pe-2">
                                    <p class="fw-medium mb-1">This is a Notification
                                    </p>
                                    <div class="text-muted">15 min ago</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="p-2 bg-body-light rounded-bottom">
                        <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                            <i class="fa fa-fw fa-flag opacity-50 me-1"></i> View All
                        </a>
                    </div>
                </div>
            </div>
            <!-- END Notifications -->
        </div>
        <!-- END Right Section -->

    </div>
    <!-- END Header Content -->
</header>
