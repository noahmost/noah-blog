<?php

//    we want to access the database object within this page
require_once(__DIR__ . "/../model/config.php");
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
//filter sanitize string means that any invalid characters that cannot be in strings are deleted
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

echo $email . " - " . $username . " - " . $password;