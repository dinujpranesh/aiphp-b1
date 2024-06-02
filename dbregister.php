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


// Insert the data into the employee table
$sql = "INSERT INTO employee (email, firstname, lastname, phone, salary, dateofbirth, gender)
VALUES ('$email', '$firstName', '$lastName', '$phone', '$salary', '$dateOfBirth', '$gender')";

try {
    if ($conn->query($sql) === TRUE) {
        // Redirect to the login page
        header("Location: login.php");
        exit();
    } else {
        echo "Error inserting data: " . $conn->error;
    }
} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
        header('Location:register.php?error');
        exit();

    } else {
        echo "Error: " . $e->getMessage();
    }
}

$conn->close();
?>