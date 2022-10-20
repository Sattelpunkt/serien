<?php

namespace App\Controllers;

use Core\MainController;
use Core\Helpers;
use Core\Session;
use App\Library\Users;
use Core\Router;

class HomeController extends MainController
{

    public function index($params = [])
    {
        $this->view->setContentTemplate('index');
        $this->view->render();
    }

    public function home($params = [])
    {
        # Für TheWolf: PENIS
        $user = new Users();
        if ($user->isLogin() == FALSE) {
            Session::addMSG('danger', 'Du bist nicht eingeloggt');
            Router::redirect('login');
        }
        $this->view->setContentTemplate('home');
        $this->view->render();
    }

}