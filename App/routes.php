<?php

use Core\Router;

Router::setRoute([
    'home' => [
        'path' => '/',
        'controller' => \App\Controllers\HomeController::class,
        'action' => 'index'
    ]
]);
Router::setRoute([
    'register' => [
        'path' => '/register/',
        'controller' => \App\Controllers\UserController::class,
        'action' => 'register'
    ]
]);

Router::setRoute([
    'doRegister' => [
        'path' => '/doRegister/',
        'controller' => \App\Controllers\UserController::class,
        'action' => 'doRegister'
    ]
]);