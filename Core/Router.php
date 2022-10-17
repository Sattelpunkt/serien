<?php

namespace Core;

class Router
{

    private static $routes = [
        'error_notFound' => [
            'path' => '/error',
            'controller' => \App\Controllers\ErrorController::class,
            'action' => 'notFound'
        ]
    ];

    public static function setRoute($route = [])
    {
        self::$routes = array_merge(self::$routes, $route);
    }

    public static function route()
    {
        $urlPath = preg_split('/([0-9]+)/', $_SERVER['REQUEST_URI']);
        $urlPath = $urlPath[0];

        if (substr($urlPath, -1, 1) != '/') {
            $urlPath .= '/';
        }

        preg_match_all('/([0-9]+)/', $_SERVER['REQUEST_URI'], $params);
        #Route suchen
        foreach (self::$routes as $route) {
            if ($route['path'] == $urlPath) {
                $routing = $route;
                break;
            } else {
                $routing = self::$routes['error_notFound'];
            }
        }
        if (class_exists($routing['controller'])) {
            $controller = new $routing['controller'];
        }
        if (method_exists($routing['controller'], $routing['action'])) {
            call_user_func_array([$controller, $routing['action']], $params);
        }
    }

    public static function redirect($location)
    {
        header('Location: https://' . URL . $location);
        exit();
    }
}