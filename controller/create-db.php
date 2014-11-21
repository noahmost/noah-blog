<?php

    require_once(__DIR__ . "/../model/config.php"); //inserts code from config.php to dis one; DIR concatinates the actual directory to database
    //instead of $connection we put $_SESSION
    $query = $_SESSION["connection"]->query("CREATE TABLE posts ( " //this creates a table so we can put info in dbase; table is called posts
            . "id int(11) NOT NULL AUTO_INCREMENT," //the id is an integer 
            . "title varchar(255) NOT NULL," // the title is a string of characters
            . "post text NOT NULL," // the post is text
            . "PRIMARY KEY (id))"); //theres up to 11 values in the integer so we can generate up to 1 billion ids
    // not null means id cant be empty; 
    
    if($query){
        echo "<p>succesfully created table: posts</p>";
    }
 else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>"; //<p> works like html makes them into paragraphs
}