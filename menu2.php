<?php
// Connection details
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cafe_project';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the order total from the POST data
$orderTotal = isset($_POST['orderTotal']) ? $_POST['orderTotal'] : 0;

// Example: Inserting an order
$sql = "INSERT INTO Orders (OrderTotal) VALUES ($orderTotal)";

if ($conn->query($sql) === TRUE) {
    echo "Order inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
