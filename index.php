<?php
function hypotenuse($a, $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}

// hypotenuse(3, 4);

$username = "Rupesh Chaulagain";
$phone = "123-456-7890";

$username = strtolower($username);
// $username = strtoupper($username);
// $username = trim($username);

// $phone = str_replace("-", "", $phone);

// $user_name = strrev($username);

echo $phone;
