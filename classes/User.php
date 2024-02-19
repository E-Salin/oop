<?php
include_once "../handler/helper.php";
class User
{
    private string $email;
    private string $password;

    static function selectUserByEmail($email)
    {
        $db = Connection::getPdo();
        $sql = QueryBuilder::select(["id", "email"], "users", [], ["email", "=", $email]);
        $stmt = $db->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
