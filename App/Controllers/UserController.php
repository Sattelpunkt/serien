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
            Session::addMSG('success', 'Account wurde erfolgreich angelegt!');
            Router::redirect('login');
        } else {
            Session::addMSG('danger', 'Die Registrierung ist fehlgeschlagen!');
            Router::redirect('register');

        }
    }

    public function login($params = [])
    {
        $this->view->setContentTemplate('login');

        $this->view->render();
    }

    public function doLogin($params = [])
    {
        if ($this->model->Login(Security::clean($_POST))) {
            Session::addMSG('success', 'Du hast dich erfolgreich eingeloggt');
        } else {
            Session::addMSG('danger', 'Login fehlgeschlagen');
        }
        Router::redirect('login');
    }

}

