<?php

namespace App\Controllers;

use Core\MainController;
use Core\MainView;
use Core\Helpers;
use Core\Session;

class HomeController extends MainController
{

    public function index($params = [])
    {
        $this->view->setContentTemplate('index');

        # Session::addMSG('danger', 'Penis');
        # Session::addMSG('info', 'Penis');
        $this->view->render();
    }

}