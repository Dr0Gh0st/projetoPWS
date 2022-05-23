<?php
    require_once './vendor/autoload.php';

    const APP_NOME = 'Fatura+';
    const INVALID_ACCESS_ROUTE = 'c=login&a=index';

    ActiveRecord\Config::initialize(function ($cfg)
    {
        $cfg -> set_model_directory('./models');
        $cfg -> set_connections(array('development' => 'mysql://root@localhost/projectpws'));
    });