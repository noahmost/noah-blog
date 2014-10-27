<?php

require_once(__DIR__ . "/../model/database.php"); //inserts code from database.php to dis one; DIR concatinates the actual directory to database
$connection = new mysqli($host, $username, $password);

if($connection->connect_error) { //if there is an error
    die("error: " . $connection->connect_error); //
}
 else {
     echo "success: " . $connection->host_info;
}

$connection->close();