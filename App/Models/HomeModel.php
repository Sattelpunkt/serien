<?php

namespace App\Models;

use Core\MainModel;
use Core\Database;


class HomeModel extends MainModel
{
    public function getDB() {
        $db = Database::getInstance();

    }
}