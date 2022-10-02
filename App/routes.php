<?php

use Core\Router;

Router::setRoute([
    'home' => [
        'path' => '/',
        'controller' => \App\Controllers\HomeController::class,
        'action' => 'index'
    ]
]);