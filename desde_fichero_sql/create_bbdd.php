<?php
include("../connection_server.php");

$create = file_get_contents("create.sql");

try {
    $statement = $db->prepare($create);
    $statement->execute();
} catch(PDOException $e) {
    print "Error:" . $e->getMessage() . "<br/>";
}
?>