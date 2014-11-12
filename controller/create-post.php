<?php
    require_once(__DIR__ . "/../model/database.php"); //we required database.php so we have access to the variables below
    $connection = new mysqli($host, $username, $password, $database); //these variables exist in database.php and we are connectiing to the database
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //this post means were sending info; 
                                                  //title means this is how it knows to receive; FILER SANTIZIE makes it a string
    $post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING); //were saving the input that went from the post on the blog into these variables
    //the controller will recieve the info with inputpost
    echo "<p>Title: $title</p>"; //these echo out the content saved in the title variable
    echo "<p>Post: $post</p>"; //these echo out the content saved in the post variable
    $connection->close(); //we are closing the connection