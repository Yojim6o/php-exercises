<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>1.5</title>
</head>
<body>
<?php
/*
When you are writing scripts, you will often need to see exactly what is
inside your variables. For this PHP exercise, think of the ways you can
do that, then write a script that outputs the following, using the echo
statement only for line breaks.

string(5) "Harry"
Harry
int(28)
NULL
*/

$string = "Harry";
var_dump($string);
echo "<br>";
print_r($string);
echo "<br>";
$num = 28;
var_dump($num);
echo "<br>";
$null = null;
var_dump($null);

?>
</body>
</html>