<?php

    require_once(__DIR__ . "/../model/database.php"); //inserts code from database.php to dis one; DIR concatinates the actual directory to database
$connection = new mysqli($host, $username, $password); //mysqli was used to build a new object

    if($connection->connect_error) { //if there is an error
    die("error: " . $connection->connect_error); //die no more code to be executed
    }
    $exists = $connection->select_db($database); //if database exists or doesnt exist it will be stored here
    
    if(!$exists){ //checking if we can connect to the database; ! means doesnt exist
        $query = $connection->query("CREATE DATABASE $database"); //a query that gets applied to our connection; if there is no database create one
    
        if($query){ //if this is true then it is successful
            echo "successfully created database: " . $database;
        }
    }
    else {
        echo "database has already been created"; // if the database is already created echo database here
    }
    $connection->close();