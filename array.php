<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="array.php" method="post">
        <label>Enter a country name: </label><br>
        <input type=" text" name="country"><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>


<?php
// $foods = array("apple", "orange", "banana");

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";

// $foods[0] = "grapes";
// array_push($foods, "grapes", "kiwi");

// array_pop($foods);

// $reversed_foods = array_reverse($foods);

// foreach ($foods as $food) {
//     echo "{$food} <br>";
// }

// foreach ($reversed_foods as $food) {
//     echo "{$food} <br>";
// }

// echo "<br>";
// echo  "<br>";

// ********** assiciative array ***********

$capitals = array("Nepal" => "Kathmandu", "USA" => "Washington D.C", "Japan" => "Tokyo");

// foreach ($capitals as $key => $value) {
//     echo "{$key} ===> {$value} <br>";
// }

// $keys = array_keys($capitals);

// foreach ($keys as $key) {
//     echo "{$key} <br>";
// }

$country = $_POST["country"];
$capital = $capitals[$_POST["country"]];

echo "The capital of {$country} is {$capital}.";

?>