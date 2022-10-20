<?php

namespace App\Controllers;

use Core\MainController;
use Core\Helpers;
use Core\Security;
use Core\Router;
use Core\Session;
use App\Library\Users;


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
            Router::redirect('home');
        } else {
            Session::addMSG('danger', 'Login fehlgeschlagen');
            Router::redirect('login');
        }

    }

    public function logout($params = [])
    {
        $this->model->Logout();
        Session::addMSG('success', 'Du hast dich ausgeloggt');
        Router::redirect('login');

    }

    public function changePassword($params = []) {
        if($this->model->changePassword(Security::clean($_POST))) {
            Session::addMSG('success', 'Passwort erfolgreich geändert');
        } else {
            Session::addMSG('info', 'Passwort wurde nicht geändert');
        }
        Router::redirect('settings');
    }

    public function changeEmail($params = []) {
        if($this->model->changeEmail(Security::clean($_POST))) {
            Session::addMSG('success', 'Email erfolgreich geändert');
        } else {
            Session::addMSG('info', 'Email wurde nicht geändert');
        }
        Router::redirect('settings');
    }

    public function index($params = [])
    {
        $user = new Users();
        if ($user->isLogin() == FALSE) {
            Session::addMSG('danger', 'Du bist nicht eingeloggt');
            Router::redirect('login');
        }
        $this->view->setContentTemplate('settings');
        $this->view->render();
    }


}

