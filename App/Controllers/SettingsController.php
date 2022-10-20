<?php

namespace App\Controllers;

use Core\MainController;
use Core\Helpers;
use App\Library\Users;
use Core\Router;

class SettingsController extends MainController
{


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