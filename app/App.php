<?php


namespace App;

use App\Database\MysqlDatabase;

class App {

    const DB_NAME = 'ecoweb';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';

    private static $database;


    static function getDatabase()
    {
        if (self::$database === null) {
            self::$database = new MysqlDatabase(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }
}