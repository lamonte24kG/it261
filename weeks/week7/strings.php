<?php
//our str_replace and substr functions!
//substr(string, start, length)

$statement = 'Presently, I am reading the Looming Tower';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 11);
echo '<h2>Now, I would like to display just the words - I am reading</h2>';
echo '<br>';
echo substr($statement, 11, 12);//count from the start point which is I(11) to determine length
echo '<h2>What if I would like to display Looming?</h2>';
echo substr($statement, -13, 8);//count right to left when using -negative, 2nd positive number start with 0, the first value in the string in this case L and count 8 from left to right
echo '<br>';
echo substr($statement, 4, 11);//length start counting at 1
echo '<br>';
echo substr($statement, -20, 2);
echo '<br>';
echo '<h2>Now for the str_replace function!</h2>';

$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower!';
echo str_replace('the', 'The', $statement2);