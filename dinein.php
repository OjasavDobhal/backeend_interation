<?php
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

// Get data from the POST request
$name = $_POST['name'];
$people = $_POST['people'];
$time = $_POST['time'];

// Insert data into the 'bookings' table
$sql = "INSERT INTO bookings (name, num_people, booking_time) VALUES ('$name', $people, '$time')";

if ($conn->query($sql) === TRUE) {
    echo "Booking added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
