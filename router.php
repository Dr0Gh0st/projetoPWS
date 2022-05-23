<?php
    require_once './startup/boot.php';
    require_once './controllers/LoginController.php';
    require_once './controllers/SiteController.php';

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

                if ($action == 'index') {
                    $sitecontroller -> index();
                }
                break;

            case 'login':
                $logincontroller = new  LoginController();

                switch ($action)
                {
                    case 'index':
                        $logincontroller -> index();
                        break;

                    case 'login':
                        $logincontroller -> login();
                        break;

                    case 'logout':
                        $logincontroller ->logout();
                        break;
                }
            break;
        }
    }
