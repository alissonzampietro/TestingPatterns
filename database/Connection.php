<?php
namespace Pattern;

use PDO;

class Connection
{

    private static $conn;

    public static function getConnection()
    {
        if (self::$conn == NULL) {
            self::$conn = new \PDO("mysql:host=172.17.0.2;dbname=colmeia", "root", "root");
        }
        return self::$conn;
    }
}