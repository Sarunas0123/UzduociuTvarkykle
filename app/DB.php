<?php

namespace TaskManager;
use PDO;

class DB{
    private static $connection = 'mysql:host=127.0.0.1';
    private static $user = 'root';
    private static $password = '';
    private static $db = 'todolist';
    private static $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ];

    public static function connect(){
        try{
            return new PDO(
                self::$connection.';dbname='.self::$db,
                self::$user,
                self::$password,
                self::$options
            );
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
}