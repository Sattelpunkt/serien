<?php

namespace Core;

use App\config;
use PDO;

class Database
{

    private $dsn, $user, $pass;
    private static $db = null;
    private $dbh, $error, $stmt;
    private $options = [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];


    private function __construct()
    {
        $this->dsn = "mysql:host=" . config::$config['Database_Host'] . ";dbname=" . config::$config['Database_Name'];
        $this->user = config::$config['Database_User'];
        $this->pass = config::$config['Database_Password'];


        try {
            $this->dbh = new PDO($this->dsn, $this->user, $this->pass, $this->options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }

    }

    public static function getInstance()
    {
        if (self::$db == null) {
            self::$db = new self();
        }
        return self::$db;
    }

    public function __destruct() {
        $db = null;
        $dbh = null;
    }

}