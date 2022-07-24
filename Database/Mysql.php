<?php

    namespace Database;

    class Mysql
    {

        public static $pdo;

        public static function connect() {

            self::$pdo = null;

            try{
                self::$pdo = new \PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS,array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            }catch(\Exception $e){
                echo 'Something went wrong while trying to connect to the database :(, Error: '.$e->getMessage();
                return false;
            }
                 
            return self::$pdo;
        }

    }