<?php
    require_once './startup/boot.php';
    require_once './controllers/AuthController.php';
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

                    switch ($action) {
                        case 'index':
                            $sitecontroller->index();
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
        }
    }
