<?php
class DBConfig
{
    private const HOST = "localhost:8889";
    private const DB_NAME = "oop";
    private const USER = "root";
    private const PASS = "root";

    static function getHost()
    {
        return self::HOST;
    }
    static function getBaseName()
    {
        return self::DB_NAME;
    }
    static function getUserName()
    {
        return self::USER;
    }
    static function getPass()
    {
        return self::PASS;
    }
}