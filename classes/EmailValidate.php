<?php
include_once "../handler/helper.php";
class EmailValidate
{
    static function validate($email) :bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
