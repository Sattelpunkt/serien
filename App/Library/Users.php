<?php

namespace App\Library;

use Core\Database;
use Core\Session;
use Core\Helpers;
use Core\Security;

class Users
{
    public function checkRegister($registerData)
    {

        $error = false;

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
        $sql = "INSERT INTO `accounts`(username, password, email) VALUES (:username, :password, :email)";
        $args = [
            ':username' => $registerData['username'],
            ':password' => password_hash($registerData['password1'], PASSWORD_DEFAULT),
            ':email' => $registerData['email']
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

    public function doLogin($loginData)
    {
        $db = Database::getInstance();
        $result = $db->column($db->run('SELECT `id` FROM `accounts` WHERE `username` = :username', [':username' => $loginData['username']]));
        Session::set('loggedIn', TRUE);
        Session::set('userID', $result['id']);
        return TRUE;
    }

    public function getUserID()
    {
        return Session::get('userID');
    }

    public function isLogin()
    {
        return Session::exists('loggedIn');

    }

    public function doLogout()
    {
        Session::delete('loggedIn');
        Session::delete('userID');
    }

    public function changePassword($changeData)
    {
        $db = Database::getInstance();
        $userdata = $db->findByID('accounts', Security::clean(Session::get('userID')));

        $error = FALSE;

        if (!password_verify($changeData['oldPassword'], $userdata['password'])) {
            $error = TRUE;
            Session::addMSG('danger', 'das alte Passwort ist nicht richtig');
        }
        if ($changeData['newPassword1'] != $changeData['newPassword2']) {
            $error = TRUE;
            Session::addMSG('danger', 'die neuen Passwörter sind nicht identisch');
        }
        if ($error === TRUE) {
            return $error;
        }
        $sql = "UPDATE `accounts` set `password` =:password WHERE id =:id";
        $arg = [":password" => password_hash($changeData['newPassword1'], PASSWORD_DEFAULT), ":id" => Security::clean(Session::get('userID'))];
        return $db->run($sql, $arg);
    }

    public function changeEMail($changeData)
    {
        $db = Database::getInstance();
        $sql = "UPDATE `accounts` set `email` =:email WHERE id =:id";
        $arg = [":email" => $changeData['email'], ":id" => Session::get('userID')];
        return $db->run($sql, $arg);
    }


}
