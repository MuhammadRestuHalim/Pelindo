<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/dist/css/adminlte.min.css?v=3.2.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-switch@3.4.0/dist/css/bootstrap3/bootstrap-switch.min.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="/dashboard" class="navbar-brand">
                    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Monitor CCTV</span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/assets/img/about-us.jpg" alt="Profile Logo" class="profile-logo rounded-circle" width="30" height="30">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="/index3.html" class="brand-link">
                <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Monitor CCTV</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>
                                    Control Panel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/users" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Input User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/riwayat" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Riwayat
                                </p>
                            </a>
                        </li>
                    </ul>

                </nav>

            </div>

        </aside>

        <div class="content-wrapper">
            <?= $this->renderSection('content') ?>
        </div>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>

            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <script src="/plugins/jquery/jquery.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script src="/dist/js/demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-switch@3.4.0/dist/js/bootstrap-switch.min.js"></script>
</body>

</html>