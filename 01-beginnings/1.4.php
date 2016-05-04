<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>1.3</title>
</head>
<body>
<?php
/*
Arithmetic-assignment operators perform an arithmetic operation on the variable at the
same time as assigning a new value. For this PHP exercise, write a script to reproduce
the output below. Manipulate only one variable using no simple arithmetic operators to
produce the values given in the statements.

Hint: In the script each statement ends with "Value is now $variable."

Value is now 8.
Add 2. Value is now 10.
Subtract 4. Value is now 6.
Multiply by 5. Value is now 30.
Divide by 3. Value is now 10.
Increment value by one. Value is now 11.
Decrement value by one. Value is now 10.
*/

$variable = 8;
echo "Value is now $variable.<br>";
$variable += 2;
echo "Add 2. Value is now $variable.<br>";
$variable -= 4;
echo "Subtract 4. Value is now $variable.<br>";
$variable *= 5;
echo "Multiply by 5. Value is now $variable.<br>";
$variable /= 3;
echo "Divide by 3. Value is now $variable.<br>";
$variable++;
echo "Increment value by one. Value is now $variable.<br>";
$variable--;
echo "Decrement value by one. Value is now $variable.<br>";
?>
</body>
</html>