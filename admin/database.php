<?php

class Database
{

    private static $dbHost = "localhost";
    private static $dbName = "zeinabsa_burger";
    private static $dbUser = "zeinabsa_burger";
    private static $dbUserPassword = "GkH3fwFPnksttYAMKRDC";



/*

    private static $dbHost ="localhost";
    private static $dbName = "burger_code";
    private static $dbUser = "root";
    private static $dbUserPassword = "";
*/
private static $connection = null;

public static function connect(){

try
{
self::$connection = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName, self::$dbUser,self::$dbUserPassword);
}
catch(PDOException $e){
die($e->getMessage());
}
return self::$connection;
}

public static function disconnect(){
    self::$connection = null;
}

};
 Database::connect();
?>