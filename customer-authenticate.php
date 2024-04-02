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

    // Get input data from the login form
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";

    // Check if any of the required fields are empty
    if (empty($name) || empty($phone)) {
        echo "Both name and phone number are required. Please fill in all the fields.";
    } else {
        // Prepare and execute a SQL query to check credentials
        $query = "SELECT * FROM customer_login WHERE Name = ? AND Phone_no = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ss", $name, $phone);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a matching row is found in the database
        if ($result->num_rows === 1) {
            // Authentication successful, redirect to action.php
            header("Location: action.php");
            exit(); // Terminate the script to prevent further execution
        } else {
            // Authentication failed
            echo "Authentication failed. Please check your name and phone number.";
        }

        // Close database connection
        $stmt->close();
    }

    $mysqli->close();
}
?>
