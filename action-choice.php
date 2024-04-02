<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedAction = isset($_POST['action']) ? $_POST['action'] : "";

    if ($selectedAction === "order") {
        // Redirect to the order page (order.php in this example)
        header("Location: order.php");
        exit();
    } elseif ($selectedAction === "dinein") {
        // Redirect to the dine-in booking page (dinein.php in this example)
        header("Location: dinein.php");
        exit();
    } else {
        echo "Invalid selection. Please choose a valid option.";
    }
}
?>
