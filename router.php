<?php
    require_once './startup/boot.php';
    require_once './controllers/AuthController.php';
    require_once './controllers/SiteController.php';
    require_once './controllers/BOController.php';
    require_once './controllers/ClienteController.php';
    require_once './controllers/FaturaController.php';
    require_once './controllers/LinhaFaturaController.php';
    require_once './controllers/EmpresaController.php';
    require_once './controllers/ProdutoController.php';
    require_once './controllers/IvaController.php';

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

            case 'empresa':
                $empresascontroller = new EmpresaController();

                switch ($action)
                {
                    case 'index':
                        $empresascontroller -> index();
                        break;

                    case 'show':
                        $empresascontroller -> show($_GET['id']);
                        break;

                    case 'update':
                        $empresascontroller -> update($_GET['id']);
                        break;

                    case 'edit':
                        $empresascontroller -> edit($_GET['id']);
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

                    case 'create':
                        $bocontroller -> create();
                        break;

                    case 'store':
                        $bocontroller -> store();
                        break;

                    case 'edit':
                        $bocontroller -> edit($_GET['id']);
                        break;

                    case 'update':
                        $bocontroller -> update($_GET['id']);
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

                    case 'show':
                        $faturacontroller -> show($_GET['id']);
                        break;

                    case 'create':
                        $faturacontroller -> create();

                }

            case 'produto':
                $produtocontroller = new ProdutoController();

                switch ($action)
                {
                    case 'index':
                        $produtocontroller -> index();
                        break;

                    case 'edit':
                        $produtocontroller -> edit($_GET['id']);
                        break;

                    case 'update':
                        $produtocontroller -> update($_GET['id']);
                        break;
                }
                break;

            case 'iva':
                $ivacontroller = new IvaController();

                switch ($action)
                {
                    case 'index':
                        $ivacontroller -> index();
                        break;

                    case 'edit':
                        $ivacontroller -> edit($_GET['id']);
                        break;

                    case 'update':
                        $ivacontroller -> update($_GET['id']);
                        break;
                }
                break;
        }
    }
