<?php

use \Core\Router;

define('DS', DIRECTORY_SEPARATOR);

define('PROOT', str_replace('public', '', __DIR__));

require_once PROOT . DS . 'Core' . DS . 'Autoload.php';

require_once PROOT . DS . 'App' . DS . 'routes.php';

define('ROOT',Config::get('root_dir'));

Router::route();
