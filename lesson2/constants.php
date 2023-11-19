<?
// Define a constant using the const keyword
const PI = 3.14159;

// Define a constant using the define() function
define("MAXIMUM_VALUE", 100);

// Define a variable
$radius = 5;

// Using constants
$circleArea = PI * ($radius ** 2);
if ($circleArea > MAXIMUM_VALUE) {
    echo "Circle area is larger than the maximum value.";
} else {
    echo "Circle area is within the acceptable range.";
}

// Using variables
$temperature = 28;
if ($temperature > MAXIMUM_VALUE) {
    echo "Temperature exceeds the maximum value.";
} else {
    echo "Temperature is within the acceptable range.";
}
