<?php
setcookie("fav_food", "pizza", time() - 0, "/");
setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
setcookie("fav_dessert", "ice-cream", time() + (86400 * 4), "/");

foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}

if (isset($_COOKIE["fav_food"])) {
    echo "BUY SOME {$_COOKIE["fav_food"]}!! <br>";
} else {
    echo "I dont know your favourite food! <br>";
}
