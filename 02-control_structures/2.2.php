<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>2.2</title>
</head>
<body>
<?php
/*
In this PHP exercise, you will put all the loops through their paces. Write a script that will
print the following to the browser:

abc abc abc abc abc abc abc abc abc

xyz xyz xyz xyz xyz xyz xyz xyz xyz

1 2 3 4 5 6 7 8 9

1. Item A
2. Item B
3. Item C
4. Item D
5. Item E
6. Item F

Create the 'abc' row with a while loop, the 'xyz' row with a do-while loop, and the last
two sections with for loops. Remember to include HTML and source code line breaks in your
output. No arrays allowed in this solution.
*/
$a = 0;
while ($a < 9) {
    echo "abc ";
    $a++;
}

echo "<br>";

$x = 0;
do {
    echo "xyz ";
    $x++;
} while ($x < 9);

echo "<br>";

for ($num = 1; $num < 10; $num++) {
    echo $num . " ";
}

echo "<br>";

$letter = "A";

for ($item = 1; $item < 7; $item++) {
    echo $item . '. ' . 'Item ' . $letter . '<br>';
    $letter++;
}

?>
</body>
</html>