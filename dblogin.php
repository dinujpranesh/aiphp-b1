<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uname = $_POST['email'];
$pass = $_POST['password'];

//Handling the Admin Login to Access UsersList.php 
if($uname == "admin@gmail.com" && $pass == "admin2024"){
        $_SESSION['adminloggedin'] = true;
        header('Location:usersList.php');
        exit();
    
}
