<?php

$originalString = "Hello, World!";
$uppercaseString = strtoupper($originalString);
echo $uppercaseString;  // Outputs: HELLO, WORLD!

$data = "Hello, World!";
$hash = sha1($data);
echo "SHA-1 Hash: $hash";  // Outputs the SHA-1 hash of the input data

$rawHash = sha1($data, true);
echo "Raw SHA-1 Hash: " . bin2hex($rawHash);  // Outputs the raw SHA-1 hash in hexadecimal


$base = 2;
$exp = 3;

$result = pow($base, $exp);
echo "$base raised to the power of $exp is: $result";  // Outputs: 2 raised to the power of 3 is: 8

$base = 3.5;
$exp = 2;

$result = pow($base, $exp);
echo "$base raised to the power of $exp is: $result";  // Outputs: 3.5 raised to the power of 2 is: 12.25


$name = "John";
$age = 25;

if (isset($name)) {
    echo "\$name is set.";  // Outputs: $name is set.
}

if (isset($name, $age)) {
    echo "\$name and \$age are set.";  // Outputs: $name and $age are set.
}
