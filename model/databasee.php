<?php

class Database { //classes are used to make code easier to maintain; cut down lines of code; easier to read
//classes also make the code re-usable
//the name of the class usually if not always has to have the same name as the file

    private $connection; //private means that this can only be used in this file
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database) {
        //this lets us establish a connection with the variables and it lets us save the information in these variables
        //the __construct function also lets us define our constructors the right way and public means it lets us use it in any file
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) { //if there is an error
            die("<p>error: " . $this->connection->connect_error) . "</p>"; //die no more code to be executed
        }
    }

    public function closeConnection() {
        
    }

    public function query($string) { //everytime we call the query function we have to pass it a string 
    }

}
