<!-- INSERTION -->

<!-- <?php
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
        ?> -->

<!-- RETRIEVAL -->

<?php
include("database.php");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
} else {
    echo "User doesn't exist! <br>";
}

mysqli_close($conn);
