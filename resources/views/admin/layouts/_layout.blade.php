<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta
        name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
        name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow"/>
    <title>Админ панель - topadvisor</title>
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
        rel="stylesheet"
        type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link
        href="{{ asset('admin/css/dataTables.bootstrap4.css') }}"
        rel="stylesheet"
    />
    <link href="{{ asset('admin/css/style.min.css') }}" rel="stylesheet"/>
    @stack('styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>-->
    <!--[endif]-->
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
        <nav class="navbar top-navbar navbar-dark" style="padding-right: 20px;">
            <div class="navbar-header" data-logobg="skin5">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="/">
                    <!-- Logo icon -->
                    <b class="logo-icon ps-2">
                        <!-- Light Logo icon -->
                        <svg width="160" height="55" viewBox="0 0 220 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.2768 2.26709C10.5771 2.26709 8.38232 4.41807 8.38232 7.07288C8.38232 9.72769 10.5771 11.8787 13.2768 11.8787C15.9766 11.8787 18.1713 9.72769 18.1713 7.07288C18.1713 4.41807 15.9766 2.26709 13.2768 2.26709ZM13.2768 10.4253C11.3928 10.4253 9.85845 8.93318 9.85845 7.07288C9.85845 5.21257 11.3928 3.72045 13.2768 3.72045C15.1608 3.72045 16.6952 5.21257 16.6952 7.07288C16.6952 8.93318 15.1608 10.4253 13.2768 10.4253Z" fill="white"/>
                            <path d="M24.8719 2.26709C23.4541 2.26709 22.1916 2.92595 21.337 3.97237V2.51901H19.7832V15.4636H21.337V10.1734C22.1916 11.2198 23.4541 11.8787 24.8719 11.8787C27.4357 11.8787 29.4945 9.72769 29.4945 7.07288C29.4945 4.41807 27.4163 2.26709 24.8719 2.26709ZM24.6777 10.4447C22.8714 10.4447 21.4147 8.93318 21.4147 7.07288C21.4147 5.21257 22.8714 3.70107 24.6777 3.70107C26.484 3.70107 27.9407 5.21257 27.9407 7.07288C27.9407 8.93318 26.484 10.4447 24.6777 10.4447Z" fill="white"/>
                            <path d="M4.0314 4.67014H5.72117V3.13927H4.0314V0H2.49701V3.13927H0.82666V4.67014H2.49701V11.6075H2.55528H4.0314H7.44978V10.0767H4.0314V4.67014Z" fill="white"/>
                            <path d="M92.6715 45.6847L80.8905 18.1968H74.1743L89.499 53.0333H95.8626L111.039 18.1968H104.471L92.6715 45.6847Z" fill="white"/>
                            <path d="M201.299 18.1968H201.076V53.0333H206.957V24.0461H220V18.1968H201.299Z" fill="white"/>
                            <path d="M120.557 18.1968H114.694V53.0519H120.557V18.1968Z" fill="white"/>
                            <path d="M177.384 17.1973C167.013 17.1973 158.608 25.4344 158.608 35.6151C158.608 45.7958 167.013 54.033 177.384 54.033C187.755 54.033 196.159 45.7958 196.159 35.6151C196.159 25.4344 187.755 17.1973 177.384 17.1973ZM177.384 48.4428C170.167 48.4428 164.304 42.6861 164.304 35.6151C164.304 28.5441 170.167 22.7874 177.384 22.7874C184.601 22.7874 190.464 28.5441 190.464 35.6151C190.464 42.6861 184.601 48.4428 177.384 48.4428Z" fill="white"/>
                            <path d="M65.0834 23.7313C61.8366 19.733 56.9758 17.1971 51.5398 17.1971C41.7439 17.1971 33.8032 25.4342 33.8032 35.5965C33.8032 45.7587 41.7439 54.0143 51.5398 54.0143C56.9758 54.0143 61.8366 51.4784 65.0834 47.4801V53.0332H71.0574V3.4624H65.0834V23.7313ZM52.2633 48.5352C45.3617 48.5352 39.7773 42.7415 39.7773 35.5965C39.7773 28.4514 45.3617 22.6577 52.2633 22.6577C59.165 22.6577 64.7309 28.4514 64.7309 35.5965C64.7309 42.7415 59.1465 48.5352 52.2633 48.5352Z" fill="white"/>
                            <path d="M152.672 37.7068C152.004 36.9664 151.15 36.3186 150.111 35.7262C149.072 35.1524 147.811 34.6156 146.345 34.1343C145.195 33.7456 144.045 33.3754 142.876 33.0237C141.707 32.672 140.594 32.3573 139.536 32.0612C138.72 31.8205 137.866 31.5799 137.013 31.3022C136.141 31.0246 135.38 30.7099 134.675 30.3397C133.989 29.9695 133.414 29.5252 132.968 29.0069C132.523 28.4701 132.301 27.8408 132.301 27.0819C132.301 26.397 132.486 25.7491 132.876 25.1753C133.265 24.6015 133.785 24.0832 134.471 23.676C135.139 23.2502 135.937 22.9355 136.846 22.6949C137.755 22.4543 138.757 22.3432 139.852 22.3432C141.039 22.3432 142.134 22.4913 143.135 22.7689C144.137 23.0466 145.028 23.4538 145.77 23.9906C146.531 24.5274 147.143 25.1568 147.607 25.9342C148.071 26.6931 148.386 27.5631 148.534 28.5072L154.434 27.4336C154.212 25.8787 153.711 24.4904 152.931 23.2317C152.134 21.973 151.113 20.9179 149.852 20.0109C148.59 19.1224 147.143 18.419 145.492 17.9377C143.859 17.4565 142.041 17.2158 140.074 17.2158C138.108 17.2158 136.234 17.4565 134.564 17.9562C132.894 18.456 131.466 19.1409 130.278 20.0294C129.072 20.9179 128.145 21.973 127.495 23.1947C126.828 24.4164 126.512 25.7861 126.512 27.304C126.512 28.8218 126.827 30.1361 127.477 31.1912C128.108 32.2648 128.998 33.1718 130.111 33.9307C131.243 34.6896 132.56 35.3375 134.082 35.8743C135.603 36.4111 137.254 36.9109 139.054 37.3736C140.39 37.7439 141.577 38.077 142.616 38.3917C143.655 38.7064 144.49 38.984 145.102 39.2247C145.789 39.5023 146.364 39.7985 146.827 40.0762C147.273 40.3723 147.644 40.687 147.922 41.0387C148.2 41.3904 148.386 41.7421 148.497 42.1308C148.609 42.5195 148.664 42.9453 148.664 43.4265C148.664 45.148 147.959 46.4993 146.549 47.4433C145.139 48.4058 143.21 48.8871 140.761 48.8871C138.312 48.8871 136.16 48.3688 134.583 47.3322C133.024 46.2957 131.948 44.7408 131.392 42.6491L125.436 43.6487C125.826 45.3516 126.438 46.851 127.291 48.1467C128.145 49.4424 129.221 50.516 130.501 51.4045C131.781 52.2745 133.284 52.9409 134.972 53.3851C136.661 53.8294 138.571 54.0515 140.649 54.0515C142.727 54.0515 144.75 53.8109 146.456 53.3111C148.163 52.8113 149.629 52.1079 150.853 51.1639C152.059 50.2199 152.987 49.0907 153.618 47.758C154.249 46.4252 154.583 44.9259 154.583 43.26C154.583 42.1308 154.434 41.1127 154.137 40.2057C153.84 39.2987 153.358 38.4658 152.69 37.7253L152.672 37.7068Z" fill="white"/>
                            <path d="M2.54175 18.1597V24.009H19.5733C12.1336 27.7295 0 32.4497 0 42.7785C0 49.4422 5.25046 53.9958 12.5232 53.9958C12.5603 53.9958 23.5065 53.9958 23.5065 53.9958V48.4797H12.9499C7.4397 48.5537 6.08534 45.2589 6.08534 42.0566C6.08534 34.3933 23.2467 28.1183 23.3024 28.0998V42.1862H29.1651V18.1597H2.57885H2.54175Z" fill="white"/>
                        </svg>
                    </b>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->

            </div>
            @auth
            <a class="login" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endauth
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

        @auth
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="pt-4">
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false"><span
                                class="hide-menu">Разделы услуг</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('services.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span
                                        class="hide-menu"> Разделы услуг </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('services.create') }}" class="sidebar-link"><i class="far fa-plus"></i><span
                                        class="hide-menu"> Добавить раздел </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false"><span
                                class="hide-menu">Услуги</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('subservices.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span
                                        class="hide-menu"> Список услуг </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('subservices.create') }}" class="sidebar-link"><i class="far fa-plus"></i><span
                                        class="hide-menu"> Добавить услугу </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('steps.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span
                                        class="hide-menu"> Этапы работ </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('steps.create') }}" class="sidebar-link"><i class="far fa-plus"></i><span
                                        class="hide-menu"> Добавить этапы работ </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false"><span class="hide-menu">Партнеры</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('partners.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span
                                        class="hide-menu"> Все партнеры </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('partners.create') }}" class="sidebar-link"><i class="far fa-plus"></i><span class="hide-menu"> Добавить партнера </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false"><span class="hide-menu">Команда</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('members.index') }}" class="sidebar-link"><i class="fas fa-users"></i><span
                                        class="hide-menu"> Участники команды </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('members.create') }}" class="sidebar-link"><i class="fas fa-user-plus"></i><span
                                        class="hide-menu"> Добавить участника </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false"><span
                                class="hide-menu">Проекты</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('projects.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span
                                        class="hide-menu"> Все проекты </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('projects.create') }}" class="sidebar-link"><i class="far fa-plus"></i><span
                                        class="hide-menu"> Добавить проект </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false"><span class="hide-menu">Обращения</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('contacts.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span class="hide-menu"> Все обращения </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                           aria-expanded="false"><span
                                class="hide-menu">Статьи</span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('articles.index') }}" class="sidebar-link"><i class="fas fa-list"></i><span class="hide-menu"> Все статьи </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('articles.create') }}" class="sidebar-link"><i class="far fa-plus"></i><span
                                        class="hide-menu"> Добавить статью </span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    @else
    @endauth
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper" style="background: #fff">
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
{{--        <footer class="footer text-center">--}}
{{--            All Rights Reserved by Matrix-admin. Designed and Developed by--}}
{{--            <a href="https://www.wrappixel.com">WrapPixel</a>.--}}
{{--        </footer>--}}
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
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
{{--<script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}"></script>--}}
{{--<script src="{{ asset('admin/js/sparkline.js') }}"></script>--}}
<!--Wave Effects -->
<script src="{{ asset('admin/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
<!-- this page js -->
<script src="{{ asset('admin/js/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('admin/js/jquery.multicheck.js') }}"></script>
<script src="{{ asset('admin/js/datatables.min.js') }}"></script>
@stack('scripts')
<!--Custom JavaScript -->
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/js/script.js') }}"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $("#zero_config").DataTable();
</script>
</body>
</html>
