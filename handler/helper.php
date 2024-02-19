<?php
function dnd($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die;
}

spl_autoload_register(function ($class) {
    return include_once "../classes/" . $class . ".php";
});
