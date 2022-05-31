<?php
    require_once 'vendor/autoload.php';

    ActiveRecord\Config::initialize(function($cfg)
    {
        $cfg->set_model_directory('./modelos');
        $cfg->set_connections(
        array('development' => 'mysql://root@localhost/fatura+',));
    });

    define('NOME_APP', 'Fatura+');
    define('ROTA_LOGIN', 'login');

