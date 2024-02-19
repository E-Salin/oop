<?php
class Connection
{
    private $pdo;
    static $instance = null;
    public function __construct()
    {
        $host = DBConfig::getHost();
        $db_name = DBConfig::getBaseName();
        $user = DBConfig::getUserName();
        $password = DBConfig::getPass();
        $this->pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
    }
    static function getPdo()
    {
        if (!self::$instance){
            self::$instance = new Connection();
        }
        return self::$instance->pdo;
    }
}
