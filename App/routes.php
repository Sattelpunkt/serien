<?php

use Core\Router;

Router::setRoute([
    'index' => [
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

Router::setRoute([
    'login' => [
        'path' => '/login/',
        'controller' => \App\Controllers\UserController::class,
        'action' => 'login'
    ]
]);

Router::setRoute([
    'logout' => [
        'path' => '/logout/',
        'controller' => \App\Controllers\UserController::class,
        'action' => 'logout'
    ]
]);

Router::setRoute([
    'doLogin' => [
        'path' => '/doLogin/',
        'controller' => \App\Controllers\UserController::class,
        'action' => 'doLogin'
    ]
]);

Router::setRoute([
    'home' => [
        'path' => '/home/',
        'controller' => \App\Controllers\HomeController::class,
        'action' => 'home'
    ]
]);

Router::setRoute([
    'settings' => [
        'path' => '/settings/',
        'controller' => \App\Controllers\UserController::class,
        'action' => 'index'
    ]
]);

Router::setRoute([
    'changePassword' => [
        'path' => '/changePassword/',
        'controller' => \App\Controllers\UserController::class,
        'action' => 'changePassword'
    ]
]);

Router::setRoute([
    'changeEmail' => [
        'path' => '/changeEmail/',
        'controller' => \App\Controllers\UserController::class,
        'action' => 'changeEmail'
    ]
]);

Router::setRoute([
    'genreSettings' => [
        'path' => '/genre/settings/',
        'controller' => \App\Controllers\GenreController::class,
        'action' => 'settings'
    ]
]);
Router::setRoute([
    'newGenre' => [
        'path' => '/genre/new/',
        'controller' => \App\Controllers\GenreController::class,
        'action' => 'newGenre'
    ]
]);

Router::setRoute([
    'insertGenre' => [
        'path' => '/genre/insert/',
        'controller' => \App\Controllers\GenreController::class,
        'action' => 'insertGenre'
    ]
]);