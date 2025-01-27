<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Checker</title>
</head>

<body>
    <h1>PHP Variable Checker</h1>
    <form action="signup.php" method="POST" class="signup-form">
        <h2>Sign Up</h2>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
        </div>
        <button type="submit" class="submit-btn">Sign Up</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];

        // Check if the variable is set
        if (isset($username)) {
            echo "<p>The variable is set.</p>";
        } else {
            echo "<p>The variable is NOT set.</p>";
        }

        // Check if the variable is empty
        if (empty($username)) {
            echo "<p>The variable is empty.</p>";
        } else {
            echo "<p>The variable is NOT empty.</p>";
        }
    }
    ?>
</body>

</html>