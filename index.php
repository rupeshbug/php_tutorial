<?php
include("database.php");

$username = "Patrick";
$password = "rock3";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

try {
    mysqli_query($conn, $sql);
    echo "User is now registered! <br>";
} catch (mysqli_sql_exception) {
    echo "Couldn't register user! <br>";
}

mysqli_close($conn);
