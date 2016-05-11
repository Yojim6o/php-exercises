<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>2.4</title>
</head>
<body>
<?php
/*
HTML tables involve a lot of repetitive coding - a perfect place to use
for loops. You can do even more if you nest the for loops.

In this PHP exercise, use two for loops, one nested inside another.
Create the following multiplication table:

1   2   3   4   5   6   7
2   4   6   8   10  12  14
3   6   9   12  15  18  21
4   8   12  16  20  24  28
5   10  15  20  25  30  35
6   12  18  24  30  36  42
7   14  21  28  35  42  49

Unless you want to try your hand at CSS styling, don't be concerned
about the appearance of the table, its borders and text alignment.
The point of the exercise it to create the data and the table tags using
the for loops.
*/

echo '<table>';
for ($x = 1; $x <= 7; $x++) {
    echo '<tr>';
    for ($y = 1; $y <= 7; $y++) {
        echo '<td>'.($x*$y).'</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>
</body>
</html>