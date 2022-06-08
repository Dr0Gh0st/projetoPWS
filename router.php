<?php
    require_once './startup/boot.php';
    require_once './controllers/AuthController.php';
    require_once './controllers/SiteController.php';
    require_once './controllers/BOController.php';
    require_once './controllers/ClienteController.php';

    if (!isset($_GET['c']) && !isset($_GET['a']))
    {
        $controller = new SiteController();
        $controller -> index();
    }

    else
    {
        $controller = $_GET['c'];
        $action = $_GET['a'];

        switch ($controller)
        {
            case 'site':
                $sitecontroller = new  SiteController();

                    switch ($action) {
                        case 'index':
                            $sitecontroller->index();
                            break;

                        case 'contactus':
                            $sitecontroller -> contactus();
                            break;
                    }
                break;

            case 'login':
                $authcontroller = new  AuthController();

                switch ($action)
                {
                    case 'index':
                        $authcontroller -> index();
                        break;

                    case 'login':
                        $authcontroller -> login();
                        break;

                    case 'logout':
                        $authcontroller ->logout();
                        break;
                }
            break;

            case 'bo':
                $bocontroller = new BOController();

                switch ($action)
                {
                    case 'index':
                        $bocontroller -> index();
                        break;
                }
            break;

            case 'cliente':
                $clientecontroller = new ClienteController();

                switch ($action)
                {
                    case 'index':
                        $clientecontroller -> index();
                }
            break;

            case 'fatura':
                $faturacontroller = new  FaturaController();

                switch ($action)
                {
                    case 'index':
                        $faturacontroller -> index();
                        break;
                }
        }
    }
