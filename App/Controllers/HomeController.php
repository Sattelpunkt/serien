<?php

namespace App\Controllers;

use Core\MainController;

class HomeController extends MainController{

    public function index($params = []){
        //echo "Moin";
        //print_r($params);
        $this->model->getlib();

    }

}