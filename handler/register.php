<?php
require_once "helper.php";

if (EmailValidate::validate($_POST["email"]))
{
    $user = User::selectUserByEmail($_POST["email"]);
    dnd($user);
}