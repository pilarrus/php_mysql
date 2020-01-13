<?php
$user = "root";
$password = "";

try {
    $db = new PDO("mysql:host=localhost", $user, $password);
    var_dump($db);
} catch (PDOException $e) {
    print "Error:" . $e->getMessage() . "<br/>";
}