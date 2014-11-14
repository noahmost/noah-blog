<?php

    require_once(__DIR__ . "/../model/config.php"); //inserts code from config.php to dis one; DIR concatinates the actual directory to database
$connection = new mysqli($host, $username, $password); //mysqli was used to build a new object

    if($connection->connect_error) { //if there is an error
    die("<p>error: " . $connection->connect_error) . "</p>"; //die no more code to be executed
    }
    $exists = $connection->select_db($database); //if database exists or doesnt exist it will be stored here
    
    if(!$exists){ //checking if we can connect to the database; ! means doesnt exist
        $query = $connection->query("CREATE DATABASE $database"); //a query that gets applied to our connection; if there is no database create one
    
        if($query){ //if this is true then it is successful
            echo "<p>successfully created database: " . $database . "</p>";
        }
    }
    else {
        echo "<p>database has already been created</p>"; // if the database is already created echo database here
    }
    $query = $connection->query("CREATE TABLE posts ( " //this creates a table so we can put info in dbase; table is called posts
            . "id int(11) NOT NULL AUTO_INCREMENT," //the id is an integer 
            . "title varchar(255) NOT NULL," // the title is a string of characters
            . "post text NOT NULL," // the post is text
            . "PRIMARY KEY (id))"); //theres up to 11 values in the integer so we can generate up to 1 billion ids
    // not null means id cant be empty; 
    
    if($query){
        echo "<p>succesfully created table: posts</p>";
    }
 else {
        echo "<p>$connection->error</p>"; //<p> works like html makes them into paragraphs
}
    $connection->close();