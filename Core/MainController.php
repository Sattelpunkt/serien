<?php

namespace Core;

class MainController
{

    public $model;
    public $view;
    public $controller;

    public function __construct()
    {
        $this->controller = get_called_class();
        $modelName = str_replace('Controllers', 'Models', get_called_class());
        $modelName = str_replace('Controller', 'Model', $modelName);
        $this->model = new $modelName;

        $this->view = new MainView();
    }
}