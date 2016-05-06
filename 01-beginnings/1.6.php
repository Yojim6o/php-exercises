<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>1.6</title>
</head>
<body>
<?php
/*
For this PHP exercise, write a script using the following variable:
$around="around";

Single quotes and double quotes don't work the same way in PHP. Using
single quotes (' ') and the concatenation operator, echo the following
to the browser, using the variable you created:

What goes around comes around.
*/

$around="around";

$string = 'What goes ' . $around . ' comes ' . $around . '.';

echo $string;
?>
</body>
</html>