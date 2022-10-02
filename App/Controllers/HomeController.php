<?php

namespace App\Controllers;

class HomeController {

    public function index($params = []){
        echo "Moin";
        print_r($params);
    }

}