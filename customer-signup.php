<?php
// Database connection settings
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cafe_project'; // Replace with your database name

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a database connection
    $mysqli = new mysqli($hostname, $username, $password, $database);

    // Check for database connection errors
    if ($mysqli->connect_error) {
        die("Database connection failed: " . $mysqli->connect_error);
    }

    // Get input data from the sign-up form
    $signup_name = isset($_POST['signup_name']) ? $_POST['signup_name'] : "";
    $signup_address = isset($_POST['signup_address']) ? $_POST['signup_address'] : "";
    $signup_phone = isset($_POST['signup_phone']) ? $_POST['signup_phone'] : "";
    $signup_email = isset($_POST['signup_email']) ? $_POST['signup_email'] : "";

    // Check if any of the required fields are empty
    if (empty($signup_name) || empty($signup_address) || empty($signup_phone) || empty($signup_email)) {
        echo "All fields (Name, Address, Phone Number, Email) are required for sign-up. Please fill in all the fields.";
    } else {
        // Prepare and execute a SQL query to insert customer details into the database
        $query = "INSERT INTO customer_login (Name, Address, Phone_no, email_id) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ssss", $signup_name, $signup_address, $signup_phone, $signup_email);
        
        if ($stmt->execute()) {
            // Sign-up successful, redirect to action.php
            header("Location: action.php");
            exit(); // Terminate the script to prevent further execution
        } else {
            // Sign-up failed
            echo "Sign-up failed. Please try again later.";
        }

        // Close database connection
        $stmt->close();
    }

    $mysqli->close();
}
?>
