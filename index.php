<?php
spl_autoload_register(function ($clase) {
    include_once str_replace("\\", "/", $clase) . ".php";
});
use lib\Connection\Connection;

$con = Connection::getInstance();
var_dump($con);
