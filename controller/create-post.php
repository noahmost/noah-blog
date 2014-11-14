<?php
    require_once(__DIR__ . "/../model/config.php"); //we required config.php so we have access to the variables below
    $connection = new mysqli($host, $username, $password, $database); //these variables exist in database.php and we are connectiing to the database
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //this post means were sending info; 
                                                  //title means this is how it knows to receive; FILER SANTIZIE makes it a string
    $post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING); //were saving the input that went from the post on the blog into these variables
    //the controller will recieve the info with inputpost
    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'"); //running a query on our database in the query were inserting in our table posts
    if($query){
        echo "<p>Successfully inserted post: $title</p>"; //if the query is true then echo out this string
    }
    else {
       echo "<p>$connection->error</p>"; //if the query is false then echo this strings
    }
    
    $connection->close(); //we are closing the connection