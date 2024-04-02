<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Action</title>
    <link rel="stylesheet" type="text/css" href="action-styles.css">
</head>
<body>
    <div class="choose-action-form">
        <h2>Choose an Action</h2>
        <form id="actionForm" method="POST" action="action-choice.php">
            <label for="action">Select an option:</label>
            <select name="action" required>
                <option value="order">Order Food</option>
                <option value="dinein">Dine-In Booking</option>
            </select><br>

            <input type="submit" value="Proceed">
        </form>

        <script>
            // JavaScript code to redirect based on the selected option
            document.getElementById("actionForm").addEventListener("submit", function(event) {
                var selectedOption = document.querySelector("select[name='action']").value;
                if (selectedOption === "order") {
                    window.location.href = "menu2.html";
                    event.preventDefault(); // Prevent the default form submission
                } else if (selectedOption === "dinein") {
                    window.location.href = "dinein.html";
                    event.preventDefault(); // Prevent the default form submission
                }
            });
        </script>
    </div>
</body>
</html>
