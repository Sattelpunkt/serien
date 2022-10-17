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

        # mindestens eine Checkbox aktiv?
        # ToDo Hat noch fehler, später gegenprüfen
        if ($registerData['filme'] == 0 AND $registerData['serien'] == 0 AND $registerData['buecher'] == 0 AND $registerData['hoerbucher']) {
            $error = true;
            Session::addMSG('danger', "Mindestens ein Modul muss aktiv sein");
        }

        if ($registerData['password1'] != $registerData['password2']) {
            $error = true;
            Session::addMSG('danger', "Die Passwörter sind nicht identisch");
        }

        # Gibt es den User schon?
        $db = Database::getInstance();
        $result = $db->column($db->run('Select `username` FROM `accounts` WHERE `username` = :username', [':username' => $registerData['username']]));

        if (isset($result['username'])) {
            $error = true;
            Session::addMSG('danger', "Bitte benutze einen anderen Usernamen");
        }

        return $error;

    }
}