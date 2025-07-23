<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 05:15:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <base href="{{ asset('admincss') }}/" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0">

    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>
    @yield('customCss')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="nFavbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar">

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}"
                                class="{{ request()->is('admin/dashboard') ? 'bg-danger' : '' }} nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p> Dashboard </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Hero Section
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/hero/create') || request()->is('admin/hero/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('hero.create') }}"
                                        class="{{ request()->is('admin/hero/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('hero.index') }}"
                                        class="{{ request()->is('admin/hero/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Hero services Section
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/heros/create') || request()->is('admin/heros/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('heros.create') }}"
                                        class="{{ request()->is('admin/heros/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('heros.index') }}"
                                        class="{{ request()->is('admin/heros/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    About
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/about/create') || request()->is('admin/about/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('about.create') }}"
                                        class="{{ request()->is('admin/about/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about.index') }}"
                                        class="{{ request()->is('admin/about/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    About Image Slider
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/imgSlide/create') || request()->is('admin/imgSlide/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('imgSlide.create') }}"
                                        class="{{ request()->is('admin/imgSlide/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('imgSlide.index') }}"
                                        class="{{ request()->is('admin/imgSlide/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Our Services
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/service/create') || request()->is('admin/service/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('service.create') }}"
                                        class="{{ request()->is('admin/service/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('service.index') }}"
                                        class="{{ request()->is('admin/service/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Call To Action
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav  {{ request()->is('admin/callAction/create') || request()->is('admin/callAction/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('callAction.create') }}"
                                        class="{{ request()->is('admin/callAction/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('callAction.index') }}"
                                        class="{{ request()->is('admin/callAction/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Category Section
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/category/create') || request()->is('admin/category/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('category.create') }}"
                                        class="{{ request()->is('admin/category/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('category.index') }}"
                                        class="{{ request()->is('admin/category/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Portfolio Section
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/portfolio/create') || request()->is('admin/portfolio/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('portfolio.create') }}"
                                        class="{{ request()->is('admin/portfolio/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('portfolio.index') }}"
                                        class="{{ request()->is('admin/portfolio/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Status
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/status/create') || request()->is('admin/status/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('status.create') }}"
                                        class="{{ request()->is('admin/status/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('status.index') }}"
                                        class="{{ request()->is('admin/status/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Our Testimonial
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/testimonial/create') || request()->is('admin/testimonial/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('testimonial.create') }}"
                                        class="{{ request()->is('admin/testimonial/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('testimonial.index') }}"
                                        class="{{ request()->is('admin/testimonial/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Our Team
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/team/create') || request()->is('admin/team/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('team.create') }}"
                                        class="{{ request()->is('admin/team/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('team.index') }}"
                                        class="{{ request()->is('admin/team/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Contact Us
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/contact/create') || request()->is('admin/contact/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('contact.create') }}"
                                        class="{{ request()->is('admin/contact/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Record</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact.index') }}"
                                        class="{{ request()->is('admin/contact/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Record</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Footer Section
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul
                                class="nav {{ request()->is('admin/footer/create') || request()->is('admin/footer/index') || request()->is('admin/footerservice/create') || request()->is('admin/footerservice/index') ? '' : 'nav-treeview' }}">
                                <li class="nav-item">
                                    <a href="{{ route('footer.create') }}"
                                        class="{{ request()->is('admin/footer/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Usefull Links</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('footer.index') }}"
                                        class="{{ request()->is('admin/footer/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Usefull Links</p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('footerservice.create') }}"
                                        class="{{ request()->is('admin/footerservice/create') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Services</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('footerservice.index') }}"
                                        class="{{ request()->is('admin/footerservice/index') ? 'bg-danger' : '' }} nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Services</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.logout') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p> Logout </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        @yield('content')

        <footer class="main-footer">
            <strong>Copyright &copy; 2024-2025 <a href="{{route('view')}}">LaraArtisan</a>.</strong>
            All rights reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>





    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="plugins/sparklines/sparkline.js"></script>

    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>

    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="plugins/summernote/summernote-bs4.min.js"></script>

    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="dist/js/adminlte2167.js?v=3.2.0"></script>

    <script src="dist/js/demo.js"></script>

    <script src="dist/js/pages/dashboard.js"></script>



    @yield('customJs')
</body>

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2024 05:16:08 GMT -->

</html>
