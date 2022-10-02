<?php

session_start();

use \Core\Router;
use \App\config;

define('DS', DIRECTORY_SEPARATOR);

define('PROOT', str_replace('public', '', __DIR__));

define('ROOT',Config::$config['root_dir']);

require_once PROOT . DS . 'Core' . DS . 'Autoload.php';

require_once PROOT . DS . 'App' . DS . 'routes.php';


Router::route();
