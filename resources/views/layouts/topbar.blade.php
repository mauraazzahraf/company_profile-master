<!DOCTYPE html>
<html lang="en">
<!-- For RTL verison -->
<!-- <html lang="en" dir="rtl"> -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>AdminLTE 4 | Dashboard 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | Dashboard 2" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS." />
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <!-- By adding {{asset('assets')}}/css/dark/adminlte-dark-addon.css then the page supports both dark color schemes, and the page author prefers / default is light. -->
    <meta name="color-scheme" content="light dark" />
    <!-- By adding {{asset('assets')}}/css/dark/adminlte-dark-addon.css then the page supports both dark color schemes, and the page author prefers / default is dark. -->
    <!-- <meta name="color-scheme" content="dark light"> -->

    <!-- OPTIONAL LINKS -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/css/OverlayScrollbars.min.css"
        integrity="sha256-WKijf8KI68sbq8Znd6yMepIuFF0wdWfIt6gk3JWcQfk=" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css"
        integrity="sha256-mUZM63G8m73Mcidfrv5E+Y61y7a12O5mW4ezU3bxqW4=" crossorigin="anonymous" />

    <!-- REQUIRED LINKS -->

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/adminlte.css" />

    <!-- For RTL verison use {{asset('assets')}}/css/rtl/adminlte.rtl.css, remove dist/css/adminlte.css -->
    <!-- <link rel="stylesheet" href="{{asset('assets')}}/css/rtl/adminlte.rtl.css""> -->

    <!-- For dark mode use {{asset('assets')}}/css/dark/adminlte-dark-addon.css, do not remove dist/css/adminlte.css or if usinf RTL version do not remove {{asset('assets')}}/css/rtl/adminlte.rtl.css-->
    <!-- ... and then the alternate CSS first as a snap-on for dark color scheme preference -->
    <!-- <link rel="stylesheet" href="{{asset('assets')}}/css/dark/adminlte-dark-addon.css" media="(prefers-color-scheme: dark)""> -->
</head>

<body class="layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light">
            <div class="container-fluid">
                <!-- Start navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar-full" href="#" role="button"><i
                                class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- End navbar links -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{asset('assets')}}/assets/assets/img/user2-160x160.jpg" class="user-image img-circle shadow"
                                alt="User Image" />
                            <span class="d-none d-md-inline">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!-- User image -->
                            <li class="user-header bg-primary">
                                <img src="{{asset('assets')}}/assets/assets/img/user2-160x160.jpg" class="img-circle shadow" alt="User Image" />

                                <p>Admin</p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat float-end">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <!-- TODO tackel in v4.1 -->
                    <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->
