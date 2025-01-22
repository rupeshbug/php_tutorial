<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
<form action="index.php" method="post">
    username: <br>
    <input type="text" name="username"><br>
    age: <br>
    <input type="text" name="age"><br>
    email: <br>
    <input type="text" name="email"><br>
    <input type="submit" name="login" value="login">
</form>

</html>

<?php
if (isset($_POST["login"])) {

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($age)) {
        echo "Enter a valid number. <br>";
    } else {
        echo "You are $age years old. <br>";
    }

    if (empty($email)) {
        echo "Enter a valid email. <br>";
    } else {
        echo "Your email is $email. <br>";
    }
}
?>