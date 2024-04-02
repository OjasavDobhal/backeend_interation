<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
    <!-- Include any necessary CSS or stylesheets here -->
</head>
<body>
    <div class="login-form">
        <h2>Employee Login</h2>
        <link rel="stylesheet" type="text/css" href="login.css"> <

        <form method="POST" action="employee-authenticate.php">
            <label for="Emp_Id">Employee ID:</label>
            <input type="text" name="Emp_Id" required><br>

            <label for="Emp_name">Employee Name:</label>
            <input type="text" name="Emp_name" required><br>

            <label for="pass_key">Password:</label>
            <input type="password" name="pass_key" required><br>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
