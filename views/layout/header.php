<html lang="PT">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APP_NOME ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./public/BackOffice/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./public/BackOffice/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./public/BackOffice/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="./public/BackOffice/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./public/BackOffice/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="./public/BackOffice/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="./public/IMG/logo.jpg" alt="<?= APP_NOME ?>" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="router.php?c=site&a=index" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="router.php?c=site&a=contactus" class="nav-link">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <!-- Logout -->
                <?php
                if (isset($username))
                {
                    echo '<a class="nav-link active" href="router.php?c=login&a=logout">Logout</a>';
                }

                else
                {
                    echo '<a class="nav-link active" href="router.php?c=login&a=index">Login</a>';
                }
                ?>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item d-none d-sm-inline-block">
                <?php
                    if (isset($userRole))
                    {
                        if ($userRole == 'cliente') {
                            echo 'Hello';
                        }
                        else{
                            echo '<a class="nav-link active" href="router.php?c=bo&a=create">New User</a>';
                        }
                    }
                ?>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
        <!-- Brand Logo -->
        <a href="router.php?c=site&a=index" class="brand-link">
            <img src="./public/IMG/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?= APP_NOME ?></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <?php
                    if (isset($username))
                    {

                        echo $username; echo ' (' . strtoupper($userRole) . ')';
                    }

                    else
                    {
                        echo '<strong>Bem-Vindo</strong>';
                    }
                    ?>

                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <?php if(isset($userRole)) {
                                if ($userRole == 'cliente') { ?>
                                    <a href="./router.php?c=cliente&a=index" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                            <p><?php echo 'Cliente' ?></p>
                                    </a>
                                <?php } else { ?>
                                    <a href="./router.php?c=bo&a=index" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                            <p><?php echo strtoupper($userRole); ?></p>
                                    </a>
                                <?php } ?>
                        <?php } ?>
                    </li>

                    <li class="nav-item">
                        <a href="./router.php?c=fatura&a=index" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Faturas
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="./router.php?c=empresa&a=index" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Empresa
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
