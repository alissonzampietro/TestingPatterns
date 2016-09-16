<?php
namespace Pattern;

use PDO;

class Connection
{

    private static $conn;

    public static function getConnection()
    {
        if (self::$conn == NULL) {
            self::$conn = new \PDO("mysql:host=localhost;dbname=ipanema", "root", "alisson299409");
        }
        return self::$conn;
    }
}