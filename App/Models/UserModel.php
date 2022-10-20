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
        if ($users->checkRegister($registerData) == false) {
            return $users->doRegister($registerData);
        } else {
            return false;
        }

    }
}
