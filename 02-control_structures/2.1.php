<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>2.1</title>
</head>
<body>
<?php
/*
In this PHP exercise, you will use a conditional statement to determine what
gets printed to the browser. Write a script that gets the current month and
prints one of the following responses, depending on whether it's August or not:

It's August, so it's really hot.
Not August, so at least not in the peak of the heat.

Hint: the function to get the current month is 'date('F', time())' for the
month's full name.
*/

$month = date('F', time());

if ($month == 'August') {
    echo "It's August, so it's really hot.";
} else {
    echo "Not August, so at least not in the peak of the heat.";
}

?>
</body>
</html>