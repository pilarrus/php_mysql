<?php
spl_autoload_register(function ($clase) {
    include_once str_replace("\\", "/", $clase) . ".php";
});
use lib\Connection\Connection;

$a = Connection::getInstance();
$b = Connection::getInstance();
$c = Connection::getInstance();
