<?php
namespace Pattern;

use PDO;

class Connection
{

    private static $conn;

    public static function getConnection()
    {
        if (self::$conn == NULL) {
            self::$conn = new \PDO("mysql:host=127.0.0.1;dbname=colmeia", "root", "alisson299409");
        }
        return self::$conn;
    }
}