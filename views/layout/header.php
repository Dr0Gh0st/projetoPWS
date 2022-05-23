<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="./public/CSS/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->

    <link href="./public/CSS/sticky-footer-navbar.css" rel="stylesheet">
    <title><?= APP_NOME ?></title>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="router.php?c=site&a=index"><?= APP_NOME ?></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item"> <!-- Logout -->
                        <?php
                            if (isset($username))
                            {
                                echo '<a class="nav-link active" href="router.php?c=login&a=logout">Logout(' .$username. ')</a>';
                            }

                            else
                            {
                                echo '<a class="nav-link active" href="router.php?c=login&a=index">Login</a>';
                            }
                        ?>
                    </li>
                    <?php if (isset($username)) {?>
                        <li class="nav-item"><!-- Login -->
                               <a class="nav-link active" href="">WOW</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
</head>
<body class="d-flex flex-column h-100">