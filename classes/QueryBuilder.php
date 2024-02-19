<?php
class QueryBuilder
{
    static string $sql="";
    static function selectAll($table) :string
    {
        return "select * from $table";
    }

    static function select(array $cols, string $table, array $join, array $where) :string
    {
        $colons = implode(",", $cols);
        if ($join and $where){
            exit();
        }elseif ($join and !$where){
            exit();
        }elseif (!$join and $where){
            self::$sql = "select $colons from $table where $where[0] $where[1] '$where[2]'";
        }elseif (!$join and !$where){
            self::$sql = "select $colons from $table";
        }

        return self::$sql;
    }
}