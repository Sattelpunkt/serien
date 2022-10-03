<?php

namespace App\Controllers;

use Core\MainController;
use Core\MainView;

class HomeController extends MainController{

    public function index($params = []){
        $this->view->setContentTemplate('index');
        $this->view->render();

    }

}