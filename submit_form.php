<?php
// Database connection parameters
$servername = "jdbc:mysql://localhost:5500/portfolio_db";
$username = "root";
$password = "Saivenkat@123";
$database = "portfolio_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare SQL statement
$sql = "INSERT INTO contact_messages (full_name, email, mobile_number, subject, message) 
        VALUES ('$full_name', '$email', '$mobile_number', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
