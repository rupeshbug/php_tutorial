<?php
$foods = array("apple", "orange", "banana");

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";

// $foods[0] = "grapes";
array_push($foods, "grapes", "kiwi");

array_pop($foods);

$reversed_foods = array_reverse($foods);

foreach ($foods as $food) {
    echo "{$food} <br>";
}

foreach ($reversed_foods as $food) {
    echo "{$food} <br>";
}
