<?php
// Database connection settings
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cafe_project'; // Replace with your database name

// Connect to the database
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Receive data from the JavaScript POST request
    $requestData = file_get_contents('php://input');
    $data = json_decode($requestData);

    if ($data) {
        // Process the received data and insert it into the "orders" table
        $items = $data->items;
        $total = $data->total;

        // You can loop through the items and insert them into the database
        foreach ($items as $item) {
            $item_name = $item->name;
            $item_price = $item->price;

            // Example insertion code
            $sql = "INSERT INTO orders (`order detail`, `price`) VALUES ('$item_name', $total_price)";
            $conn->query($sql);
        }

        // You can also store the total price in the database or use it for other purposes
        echo "Checkout successful"; // Provide a response if needed
    } else {
        echo "Invalid data received"; // Handle invalid data
    }
}

$conn->close();
?>
