<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
<form action="checkboxes.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza"> Pizza <br>
    <input type="checkbox" name="foods[]" value="Burger"> Burger <br>
    <input type="checkbox" name="foods[]" value="Taco"> Taco <br>
    <input type="submit" name="submit">
</form>

</html>

<?php
if (isset($_POST["submit"])) {

    if (isset($_POST["pizza"])) {
        echo "You like pizza! <br>";
    }

    if (isset($_POST["burger"])) {
        echo "You like burger! <br>";
    }

    if (isset($_POST["taco"])) {
        echo "You like tacos! <br>";
    }

    if (empty($_POST["pizza"])) {
        echo "You don't like pizza!";
    }

    if (empty($_POST["burger"])) {
        echo "You don't like burger!";
    }

    if (empty($_POST["taco"])) {
        echo "You don't like tacos!";
    }
}
?>