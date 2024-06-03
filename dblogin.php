<?php
session_start();

// Retrieve the email and password from the form
$email = $_POST['email'];
$password = $_POST['password'];


//Handling the Admin Login to Access UsersList.php 
if($email == "admin@gmail.com" && $password == "admin2024"){
        $_SESSION['adminloggedin'] = true;
        header('Location:usersList.php');
        exit();
    
}


// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiphp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the user wants to log in as an admin
if (isset($_POST['admin_login'])) {
    // Prepare and execute the SQL query to check the admin login details
    $sql = "SELECT * FROM admin WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Admin login details are correct, redirect to the admin dashboard
        $_SESSION['adminloggedin'] = $email;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // Admin login details are incorrect, redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // Prepare and execute the SQL query to check the user login details
    $sql = "SELECT * FROM employee WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User login details are correct, redirect to the user dashboard
        $_SESSION['userloggedin'] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        // User login details are incorrect, redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
}

$stmt->close();
$conn->close();
?>