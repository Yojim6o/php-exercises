<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>1.2</title>
</head>
<body>
<?php
//display “Twinkle, Twinkle little star.”
echo "Twinkle, Twinkle little star.<br>";

//Next, create two variables, one for the word “Twinkle” and one for the
//word “star”.
$twinkle = "Twinkle";
$star = "star";

//Echo the statement to the browser, this time substituting
//the variables for the relevant words.
echo $twinkle . ", " . $twinkle . " little " . $star . ".<br>";

//Change the value of each variable
//to whatever you like, and echo the statement a third time. Remember to
//include code to show your statements on different lines.
$twinkle = "TWINKLE";
$star = "STAR";

echo $twinkle . ", " . $twinkle . " little " . $star . ".";

?>
</body>
</html>