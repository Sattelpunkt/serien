<?php

namespace App\Library;

use Core\Database;
use Core\Session;
use Core\Helpers;

class Users
{
    public function checkRegister($registerData)
    {

        $error = false;

        if ($registerData['filme'] == 0 and $registerData['serien'] == 0 and $registerData['buecher'] == 0 and $registerData['hoerbucher'] == 0) {
            $error = true;
            Session::addMSG('danger', "Mindestens ein Modul muss aktiv sein");
        }

        if ($registerData['password1'] != $registerData['password2']) {
            $error = true;
            Session::addMSG('danger', "Die Passwörter sind nicht identisch");
        }

        $db = Database::getInstance();
        $result = $db->column($db->run('Select `username` FROM `accounts` WHERE `username` = :username', [':username' => $registerData['username']]));

        if (isset($result['username'])) {
            $error = true;
            Session::addMSG('danger', "Bitte benutze einen anderen Usernamen");
        }

        return $error;

    }

    public function doRegister($registerData)
    {

        Helpers::dnd($registerData);
        $db = Database::getInstance();
        $sql = "INSERT INTO `accounts`(username, password, email, filme, serien, buecher, hoerbuecher) VALUES (:username, :password, :email, :filme, :serien, :buecher, :hoerbuecher)";
        $args = [
            ':username' => $registerData['username'],
            ':password' => password_hash($registerData['password1'], PASSWORD_DEFAULT),
            ':email' => $registerData['email'],
            ':filme' => $registerData['filme'],
            ':serien' => $registerData['serien'],
            ':buecher' => $registerData['buecher'],
            ':hoerbuecher' => $registerData['hoerbuecher'],
        ];
        return $db->run($sql, $args);

    }
}