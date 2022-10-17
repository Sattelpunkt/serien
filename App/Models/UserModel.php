<?php

namespace App\Models;

use Core\MainModel;
use App\Library\Users;


class UserModel extends MainModel
{
    private $users;
    public function Register($registerData) {

        $users = new Users();
        if($users->checkRegister($registerData) == false) {
            # Wunderbar, darf registiert werden, jetzt doLogin in users
            return true;
        } else {
            # hat nicht geklappt, deswegen return false.
            return false;
        }

    }
}
