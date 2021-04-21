<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/logo/dulceimpacto.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/app-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow"
        style="width: calc(100vw - (100vw - 100%) - 4.4rem + 6px);">
        <div class="navbar-container d-flex content justify-content-between">
            <div class="bookmark-wrapper d-flex align-items-center">
                <img src="./app-assets/images/logo/dulceimpacto.jpg" alt="Logo"
                    style="border-radius: 100%; margin-right: 10px;" height=40>
                <h2 class="brand-text text-warning">Dulce Impacto</h2>
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
            </div>
            <nav class="justify-content-center align-items-center">
                <ul class="nav nav-pills" style="margin-bottom: 0;">
                    <!-- general -->
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == '/' ? ' btn-warning' : '' }}"
                            href="{{ route('home') }}">
                            <span class="font-weight-bold">Productos</span>
                        </a>
                    </li>
                    <!-- view purchases -->
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="./nosotros.html"> --}}
                        <a class="nav-link {{ Request::path() == 'nosotros' ? ' btn-warning' : '' }}"
                            href="{{ route('home.nosotros') }}">
                            <span class="font-weight-bold">¿Quienes somos?</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="javascript:void(0);" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
            </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li> -->
            @if (Route::has('login'))
                {{-- <div class="row"> --}}
                @auth
                    <ul class="nav navbar-nav align-items-center">
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                                    data-feather="search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i data-feather="search"></i></div>
                                <input class="form-control input" type="text" placeholder="Buscar producto..." tabindex="-1"
                                    data-search="search">
                                <div class="search-input-close"><i data-feather="x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-cart mr-25"><a class="nav-link" href="javascript:void(0);"
                                data-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span
                                    class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header d-flex">
                                        <h4 class="notification-title mb-0 mr-auto">Mi carrito</h4>
                                        <div class="badge badge-pill badge-light-primary">4 Items</div>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <div class="media align-items-center"><img class="d-block rounded mr-1"
                                            src="./app-assets/images/pages/eCommerce/1.png" alt="donuts" width="62">
                                        <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                        href="app-ecommerce-details.html"> Apple watch 5</a></h6><small
                                                    class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="1">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$374.90</h5>
                                        </div>
                                    </div>
                                    <div class="media align-items-center"><img class="d-block rounded mr-1"
                                            src="./app-assets/images/pages/eCommerce/7.png" alt="donuts" width="62">
                                        <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                        href="app-ecommerce-details.html"> Google Home Mini</a></h6><small
                                                    class="cart-item-by">By Google</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="3">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$129.40</h5>
                                        </div>
                                    </div>
                                    <div class="media align-items-center"><img class="d-block rounded mr-1"
                                            src="./app-assets/images/pages/eCommerce/2.png" alt="donuts" width="62">
                                        <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                        href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small
                                                    class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="2">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$699.00</h5>
                                        </div>
                                    </div>
                                    <div class="media align-items-center"><img class="d-block rounded mr-1"
                                            src="./app-assets/images/pages/eCommerce/3.png" alt="donuts" width="62">
                                        <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                        href="app-ecommerce-details.html"> iMac Pro</a></h6><small
                                                    class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="1">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$4,999.00</h5>
                                        </div>
                                    </div>
                                    <div class="media align-items-center"><img class="d-block rounded mr-1"
                                            src="./app-assets/images/pages/eCommerce/5.png" alt="donuts" width="62">
                                        <div class="media-body"><i class="ficon cart-item-remove" data-feather="x"></i>
                                            <div class="media-heading">
                                                <h6 class="cart-item-title"><a class="text-body"
                                                        href="app-ecommerce-details.html"> MacBook Pro</a></h6><small
                                                    class="cart-item-by">By Apple</small>
                                            </div>
                                            <div class="cart-item-qty">
                                                <div class="input-group">
                                                    <input class="touchspin-cart" type="number" value="1">
                                                </div>
                                            </div>
                                            <h5 class="cart-item-price">$2,999.00</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer">
                                    <div class="d-flex justify-content-between mb-1">
                                        <h6 class="font-weight-bolder mb-0">Total:</h6>
                                        <h6 class="text-primary font-weight-bolder mb-0">$10,999.00</h6>
                                    </div><a class="btn btn-primary btn-block"
                                        href="app-ecommerce-checkout.html">Revisar</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item dropdown dropdown-notification mr-25"><a class="nav-link"
                                href="javascript:void(0);" data-toggle="dropdown"><i class="ficon"
                                    data-feather="bell"></i><span
                                    class="badge badge-pill badge-danger badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header d-flex">
                                        <h4 class="notification-title mb-0 mr-auto">Notifications</h4>
                                        <div class="badge badge-pill badge-light-primary">6 New</div>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <div class="avatar"><img
                                                        src="./app-assets/images/portrait/small/avatar-s-15.jpg"
                                                        alt="avatar" width="32" height="32"></div>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading"><span class="font-weight-bolder">Congratulation Sam
                                                        🎉</span>winner!</p><small class="notification-text"> Won the
                                                    monthly
                                                    best seller badge.</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <div class="avatar"><img
                                                        src="./app-assets/images/portrait/small/avatar-s-3.jpg" alt="avatar"
                                                        width="32" height="32"></div>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading"><span class="font-weight-bolder">New
                                                        message</span>&nbsp;received</p><small class="notification-text">
                                                    You
                                                    have 10 unread messages</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <div class="avatar bg-light-danger">
                                                    <div class="avatar-content">MD</div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading"><span class="font-weight-bolder">Revised Order
                                                        👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                                    order updated</small>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="media d-flex align-items-center">
                                        <h6 class="font-weight-bolder mr-auto mb-0">System Notifications</h6>
                                        <div class="custom-control custom-control-primary custom-switch">
                                            <input class="custom-control-input" id="systemNotification" type="checkbox"
                                                checked="">
                                            <label class="custom-control-label" for="systemNotification"></label>
                                        </div>
                                    </div><a class="d-flex" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <div class="avatar bg-light-danger">
                                                    <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading"><span class="font-weight-bolder">Server
                                                        down</span>&nbsp;registered</p><small class="notification-text"> USA
                                                    Server is down due to hight CPU usage</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <div class="avatar bg-light-success">
                                                    <div class="avatar-content"><i class="avatar-icon"
                                                            data-feather="check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading"><span class="font-weight-bolder">Sales
                                                        report</span>&nbsp;generated</p><small class="notification-text">
                                                    Last
                                                    month sales report generated</small>
                                            </div>
                                        </div>
                                    </a><a class="d-flex" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left">
                                                <div class="avatar bg-light-warning">
                                                    <div class="avatar-content"><i class="avatar-icon"
                                                            data-feather="alert-triangle"></i></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <p class="media-heading"><span class="font-weight-bolder">High
                                                        memory</span>&nbsp;usage</p><small class="notification-text"> BLR
                                                    Server
                                                    using high memory</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="btn btn-primary btn-block"
                                        href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item dropdown dropdown-user">
                            <a class="nav-link {{ Request::path() == 'perfil' ? 'active btn btn-outline-warning border-warning' : '' }} dropdown-toggle dropdown-user-link"
                                id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name font-weight-bolder">{{ session('fullName') }}</span>
                                    <span class="user-status">Cliente</span>
                                </div>
                                <span class="avatar">
                                    <img class="round" src="./app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                        height="40" width="40">
                                    <span class="avatar-status-online"></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                                <a class="dropdown-item" href="{{ route('user.profile') }}"><i class="mr-50"
                                        data-feather="settings"></i>Cuenta</a>
                                <!-- <a class="dropdown-item" href="page-pricing.html"><i class="mr-50" data-feather="credit-card"></i> Pricing</a> -->
                                <!-- <a class="dropdown-item" href="page-faq.html"><i class="mr-50" data-feather="help-circle"></i>Preguntas</a> -->
                                {{-- <a class="dropdown-item" href="index.html">
                                    <i class="mr-50" data-feather="power"></i>
                                    Cerrar sesión
                                </a> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    <i class="mr-50" data-feather="power"></i>
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @else
                    <nav class="justify-content-center align-items-center">
                        <ul class="nav nav-pills" style="margin-bottom: 0;">
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link active btn btn-success"
                                    style="margin-right: 10px"><span class="font-weight-bold">Iniciar sesión</span></a>
                            </li>
                        </ul>
                    </nav>
                @endauth
            @endif
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application" style="margin-left: 0px;">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            @yield('title')
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                @yield('content')

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <br><br>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021
                <a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">GRUPO SIIS</a>
                <span class="d-none d-sm-inline-block">, Todos los derechos reservados</span>
            </span>
            <span class="float-md-right d-none d-md-block">
                Dulce Impacto
                <i data-feather="heart"></i>
            </span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="./app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="./app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="./app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="./app-assets/vendors/js/extensions/toastr.min.js"></script>
    <script src="./app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="./app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="./app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="./app-assets/js/core/app-menu.js"></script>
    <script src="./app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="./app-assets/js/scripts/pages/page-account-settings.js"></script>
    <script src="./app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="./app-assets/js/scripts/pages/page-auth-login.js"></script>
    <script src="./app-assets/js/scripts/pages/app-ecommerce-wishlist.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

    </script>
</body>
<!-- END: Body-->

</html>
