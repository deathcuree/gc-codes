<?php

$age = 25; // Integer data type
$name = "John"; // String data type

$price = 9.99; // Float data type
$is_active = true; // Boolean data type

$colors = array("red", "green", "blue"); // Indexed array
$person = array("name" => "Alice", "age" => 30); // Associative array

$num_str = "5"; // String
$num_int = (int)$num_str; // Casting to integer: 5

$str_num = "10.75"; // String
$num_float = (float)$str_num; // Casting to float: 10.75

function square(&$num)
{
    $num = $num * $num;
}

$value = 4;
square($value); // $value is modified to 16
