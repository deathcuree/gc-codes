<?

// This is a single line comment
// These cannot be extended to more lines

echo "hello world!!!";

# This is also a single line comment

/* This is a multi line comment
    In PHP variables are written
    by adding a $ sign at the beginning.*/

$sup = "hello world!";
echo $sup;

// PHP code illustrate the whitespace insensitivity
$var1         =     15;
$var2 =
    30;
$sum = $var1
    +
    $var2;

// "\n" for new line
echo $sum, "\n";

$sum1 = $var1 + $var2;
echo $sum1;

// Here we can see that all echo
// statements are executed in the same manner

$variable = 25;
echo $variable;
echo $variable;
echo $variable;

// but this line will show RUNTIME ERROR as
// "Undefined Variable"
echo $VARIABLE;
