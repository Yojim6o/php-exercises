<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>1.3</title>
</head>
<body>
<?php
//In your script, create the following variables:
$x = 10;
$y = 7;

//Write code to print out the following:
//10 + 7 = 17
//10 - 7 = 3
//10 * 7 = 70
//10 / 7 = 1.4285714285714
//10 % 7 = 3

echo $x . " + " . $y . " = " . ($x+$y);
echo "<br>";
echo $x . " - " . $y . " = " . ($x-$y);
echo "<br>";
echo $x . " * " . $y . " = " . ($x*$y);
echo "<br>";
echo $x . " / " . $y . " = " . ($x/$y); //1.42857142857
echo "<br>";
echo $x . " % " . $y . " = " . ($x%$y);
?>
</body>
</html>