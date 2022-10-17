<?php

namespace App\Controllers;

use Core\MainController;
use Core\Helpers;
use Core\Security;
use Core\Router;
use Core\Session;


class UserController extends MainController
{

    public function register($params = [])
    {
        $this->view->setContentTemplate('register');

        $this->view->render();
    }

    public function doRegister($params = [])
    {
        if ($this->model->Register(Security::clean($_POST))) {
            Session::addMSG('info', 'Alle eingaben haben geklappt');

            Router::redirect('register');
        } else {
            Router::redirect('register');

        }
    }
}

