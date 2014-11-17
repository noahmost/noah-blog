<?php
class Database{ //classes are used to make code easier to maintain; cut down lines of code; easier to read
//classes also make the code re-usable
//the name of the class usually if not always has to have the same name as the file
    private $connection; //private means that this can only be used in this file
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database) { //this lets us establish a connection with the variables and it lets us save the information in these variables
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
}