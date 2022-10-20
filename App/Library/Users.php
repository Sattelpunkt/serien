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

    public function checkLogin($loginData)
    {
        $error = FALSE;
        $db = Database::getInstance();

        $result = $db->column($db->run('SELECT `password` FROM `accounts` WHERE `username` = :username', [':username' => $loginData['username']]));
        if (isset($result['password'])) {
            if (!password_verify($loginData['password'], $result['password'])) {
                Session::addMSG('danger', "Username/Passwort falsch(2)");
                $error = TRUE;
            }
        } else {
            $error = TRUE;
            Session::addMSG('danger', "Username/Passwort falsch(1)");
        }

        return $error;
    }

    public function doLogin($registerData)
    {
        $db = Database::getInstance();
        Session::set('loggedIn', TRUE);
        Session::set('userID', $db->getLastInsertID());
        return TRUE;
    }

    public function getUserID()
    {
        return Session::get('userID');
    }

    public function isLogin()
    {
        return Session::exists('loggedIn') AND Session::get('loggedIn') == TRUE;
    }

    public function doLogout()
    {
        Session::delete('loggedIn');
        Session::delete('userID');
    }


}
