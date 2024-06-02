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

// Insert the data into the employee table
$sql = "INSERT INTO employee (email, first_name, last_name, phone, salary, date_of_birth)
VALUES ('$email', '$firstName', '$lastName', '$phone', '$salary', '$dateOfBirth')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>