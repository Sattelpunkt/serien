<?php

namespace App\Library;
use Core\Database;
use Core\Helpers;
use Core\Session;
use Core\Security;

class Genres
{
    public function insertGenre($data) {
        $db = Database::getInstance();
        $sql = "INSERT INTO `genre`(`name`,`userID`) VALUES (:name,:userID)";
        $arg = [":name" => $data['genre'], "userID" => Security::clean(Session::get('userID'))];
        return $db->run($sql,$arg);

    }

    public function getGenreByUserID($userID) {
        $db = Database::getInstance();
        $sql = "SELECT * FROM `genre` WHERE `userId` = :userID";
        $args = [":userID" =>$userID];
        return $db->row($db->run($sql,$args));
    }


}