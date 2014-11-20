<?php
    require_once(__DIR__ . "/databasee.php"); //used when we want to get something

    $path = "/noah-blog/"; //when we use the variable path insert this
    
    $host = "localhost"; //variables
    $username = "root"; //whenever we use variables for configuration use config.php
    $password = "root";
    $database = "blog_db";

    
    //this is a database object; the constructor uses this info and stores it in the variables
    $connection = new Database($host, $username, $password, $database);