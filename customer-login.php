<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link rel="stylesheet" href="login.css"> <!-- Include your CSS file here -->
</head>
<body>
    <div class="login-form">
        <h2>Customer Login</h2>
        <form method="POST" action="customer-authenticate.php">
            <label for="name">Name:</label>
            <input type="text" name="name" required><br>

            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" required><br>

            <input type="submit" value="Login">
        </form>

        <hr>

        <h2>Customer Sign-Up</h2>
        <form method="POST" action="customer-signup.php">
            <label for="signup_name">Name:</label>
            <input type="text" name="signup_name" required><br>

            <label for="signup_address">Address:</label>
            <input type="text" name="signup_address" required><br>

            <label for="signup_phone">Phone Number:</label>
            <input type="text" name="signup_phone" required><br>

            <label for="signup_email">Email:</label>
            <input type="email" name="signup_email" required><br>

            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>
</html>
