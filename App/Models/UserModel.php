<?php

namespace App\Models;

use Core\MainModel;
use App\Library\Users;


class UserModel extends MainModel
{
    private $users;

    public function Register($registerData)
    {

        $users = new Users();
        if ($users->checkRegister($registerData) === FALSE) {
            return $users->doRegister($registerData);
        } else {
            return FALSE;
        }

    }

    public function Login($loginData)
    {
        $users = new Users();
        if ($users->checkLogin($loginData) == 0) {
            return $users->doLogin($loginData);
        } else {
            return FALSE;
        }
    }

    public function Logout()
    {
        $users = new Users();
        return $users->doLogout();
    }
}
