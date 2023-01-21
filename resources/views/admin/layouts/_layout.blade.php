<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
        name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
        name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
        rel="stylesheet"
        type="text/css"
        href="{{ asset('admin/css/multicheck.css') }}"
    />
    <link
        href="{{ asset('admin/css/dataTables.bootstrap4.css') }}"
        rel="stylesheet"
    />
    <link href="{{ asset('admin/css/style.min.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div
    id="main-wrapper"
    data-layout="vertical"
    data-navbarbg="skin5"
    data-sidebartype="full"
    data-sidebar-position="absolute"
    data-header-position="absolute"
    data-boxed-layout="full"
>
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b class="logo-icon ps-2">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img
                            src=""
                            alt="homepage"
                            class="light-logo"
                            width="25"
                        />
                    </b>
                    <!--End Logo icon -->
                    {{--                    <!-- Logo text -->--}}
                    {{--                    <span class="logo-text ms-2">--}}
                    {{--                <!-- dark Logo text -->--}}
                    {{--                <img--}}
                    {{--                    src="../assets/images/logo-text.png"--}}
                    {{--                    alt="homepage"--}}
                    {{--                    class="light-logo"--}}
                    {{--                />
                                  </span>--}}
                    <!-- Logo icon -->
                    <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a
                    class="nav-toggler waves-effect waves-light d-block d-md-none"
                    href="javascript:void(0)"
                ><i class="ti-menu ti-close"></i
                    ></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div
                class="navbar-collapse collapse"
                id="navbarSupportedContent"
                data-navbarbg="skin5"
            >
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-start me-auto">
                    <li class="nav-item d-none d-lg-block">
                        <a
                            class="nav-link sidebartoggler waves-effect waves-light"
                            href="javascript:void(0)"
                            data-sidebartype="mini-sidebar"
                        ><i class="mdi mdi-menu font-24"></i
                            ></a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- create new -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                  <span class="d-none d-md-block"
                  >Create New <i class="fa fa-angle-down"></i
                      ></span>
                            <span class="d-block d-md-none"
                            ><i class="fa fa-plus"></i
                                ></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item search-box">
                        <a
                            class="nav-link waves-effect waves-dark"
                            href="javascript:void(0)"
                        ><i class="mdi mdi-magnify fs-4"></i
                            ></a>
                        <form class="app-search position-absolute">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search &amp; enter"
                            />
                            <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                        </form>
                    </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-end">
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="mdi mdi-bell font-24"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle waves-effect waves-dark"
                            href="#"
                            id="2"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="font-24 mdi mdi-comment-processing"></i>
                        </a>
                        <ul
                            class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    animated
                    bounceInDown
                  "
                            aria-labelledby="2"
                        >
                            <ul class="list-style-none">
                                <li>
                                    <div class="">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                            <span
                                class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                            ><i class="mdi mdi-calendar text-white fs-4"></i
                                ></span>
                                                <div class="ms-2">
                                                    <h5 class="mb-0">Event today</h5>
                                                    <span class="mail-desc"
                                                    >Just a reminder that event</span
                                                    >
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                            <span
                                class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                            ><i class="mdi mdi-settings fs-4"></i
                                ></span>
                                                <div class="ms-2">
                                                    <h5 class="mb-0">Settings</h5>
                                                    <span class="mail-desc"
                                                    >You can customize this template</span
                                                    >
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                            <span
                                class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                            ><i class="mdi mdi-account fs-4"></i
                                ></span>
                                                <div class="ms-2">
                                                    <h5 class="mb-0">Pavan kumar</h5>
                                                    <span class="mail-desc"
                                                    >Just see the my admin!</span
                                                    >
                                                </div>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="link border-top">
                                            <div class="d-flex no-block align-items-center p-10">
                            <span
                                class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "
                            ><i class="mdi mdi-link fs-4"></i
                                ></span>
                                                <div class="ms-2">
                                                    <h5 class="mb-0">Luanch Admin</h5>
                                                    <span class="mail-desc"
                                                    >Just see the my new admin!</span
                                                    >
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a
                            class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <img
                                src="../assets/images/users/1.jpg"
                                alt="user"
                                class="rounded-circle"
                                width="31"
                            />
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-end user-dd animated"
                            aria-labelledby="navbarDropdown"
                        >
                            <a class="dropdown-item" href="javascript:void(0)"
                            ><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a
                            >
                            <a class="dropdown-item" href="javascript:void(0)"
                            ><i class="mdi mdi-wallet me-1 ms-1"></i> My Balance</a
                            >
                            <a class="dropdown-item" href="javascript:void(0)"
                            ><i class="mdi mdi-email me-1 ms-1"></i> Inbox</a
                            >
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"
                            ><i class="mdi mdi-settings me-1 ms-1"></i> Account
                                Setting</a
                            >
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"
                            ><i class="fa fa-power-off me-1 ms-1"></i> Logout</a
                            >
                            <div class="dropdown-divider"></div>
                            <div class="ps-4 p-10">
                                <a
                                    href="javascript:void(0)"
                                    class="btn btn-sm btn-success btn-rounded text-white"
                                >View Profile</a
                                >
                            </div>
                        </ul>
                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ url('/admin/dashboard') }}"
                            aria-expanded="false"
                        ><i class="mdi mdi-view-dashboard"></i
                            ><span class="hide-menu">Dashboard</span></a
                        >
                    </li>
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('services.index') }}"
                            aria-expanded="false"
                        ><i class="mdi mdi-view-dashboard"></i
                            ><span class="hide-menu">Список услуг</span></a
                        >
                    </li>
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('subservices.index') }}"
                            aria-expanded="false"
                        ><i class="mdi mdi-view-dashboard"></i
                            ><span class="hide-menu">Под услуги</span></a
                        >
                    </li>
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('projects.index') }}"
                            aria-expanded="false"
                        ><i class="mdi mdi-view-dashboard"></i
                            ><span class="hide-menu">Список проектов</span></a
                        >
                    </li>
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('contacts.index') }}"
                            aria-expanded="false"
                        ><i class="mdi mdi-view-dashboard"></i
                            ><span class="hide-menu">Спиоск заявок</span></a
                        >
                    </li>
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('articles.index') }}"
                            aria-expanded="false"
                        ><i class="mdi mdi-view-dashboard"></i
                            ><span class="hide-menu">Статьи</span></a
                        >
                    </li>
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('partners.index') }}"
                            aria-expanded="false"
                        ><i class="mdi mdi-view-dashboard"></i
                            ><span class="hide-menu">Партнеры</span></a
                        >
                    </li>
                    <li class="sidebar-item">
                        <a
                            class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="{{ route('members.index') }}"
                            aria-expanded="false"
                        ><i class="mdi mdi-border-inside"></i
                            ><span class="hide-menu">Участники компании</span></a
                        >
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by
            <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
{{--<script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('admin/js/sparkline.js') }}"></script>--}}
<!--Wave Effects -->
<script src="{{ asset('admin/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<!-- this page js -->
<script src="{{ asset('admin/js/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('admin/js/jquery.multicheck.js') }}"></script>
<script src="{{ asset('admin/js/datatables.min.js') }}"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $("#zero_config").DataTable();
</script>
</body>
</html>
