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

    // Get input data from the form
    $empId = isset($_POST['Emp_Id']) ? $_POST['Emp_Id'] : "";
    $empName = isset($_POST['Emp_name']) ? $_POST['Emp_name'] : "";
    $passKey = isset($_POST['pass_key']) ? $_POST['pass_key'] : "";

    // Check if any of the required fields are empty
    if (empty($empId) || empty($empName) || empty($passKey)) {
        echo "All fields are required. Please fill in all the fields.";
    } else {
        // Prepare and execute a SQL query to check credentials
        $query = "SELECT * FROM employee_login WHERE Emp_Id = ? AND Emp_name = ? AND pass_key = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("iss", $empId, $empName, $passKey);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a matching row is found in the database
        if ($result->num_rows === 1) {
            // Authentication successful
            echo "Employee authenticated successfully!";
            // You can redirect the user to a dashboard or another page here
        } else {
            // Authentication failed
            echo "Authentication failed. Please check your credentials.";
        }

        // Close database connection
        $stmt->close();
    }

    $mysqli->close();
}
?>
