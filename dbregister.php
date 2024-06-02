<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiphp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the submitted data
$email = $_POST['Email'];
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$phone = $_POST['Phone'];
$salary = $_POST['Salary'];
$dateOfBirth = $_POST['DateOfBirth'];
$gender = $_POST['Gender'];
$password = $_POST['Password'];
$confirmPassword = $_POST['ConfirmPassword'];

// Validate the password and confirm password
if ($password !== $confirmPassword) {
    echo "Passwords do not match";
    $conn->close();
    exit();
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Check if the email already exists in the database
$sqlCheck = "SELECT * FROM employee WHERE email = '$email'";
$resultCheck = $conn->query($sqlCheck);
if ($resultCheck->num_rows > 0) {
    echo "User Already Exists";
    $conn->close();
    exit();
}

// Insert the data into the employee table
$sql = "INSERT INTO employee (email, firstname, lastname, phone, salary, dateofbirth, gender)
VALUES ('$email', '$firstName', '$lastName', '$phone', '$salary', '$dateOfBirth', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>