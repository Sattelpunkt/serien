<?php

namespace App\Models;

use Core\MainModel;
use Core\Database;
use Core\Helpers;


class HomeModel extends MainModel
{
    public function getDB() {
        $db = Database::getInstance();
        $sql = "Select *  FROM `test` WHERE `id` = :id";
        $args = [':id' => '1'];
        Helpers::dnd($db->column($db->run($sql, $args)));
    }
}