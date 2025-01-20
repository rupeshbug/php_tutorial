<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Checker</title>
</head>

<body>
    <h1>PHP Variable Checker</h1>
    <form action="" method="post">
        <label for="username">Enter a username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <input type="submit" value="Check">
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