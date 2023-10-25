<?php
//my variables

//don't forget that a variable is merely a container for data


$name = "LaMonte"; //LaMonte is a string
$name = 'William'; //last variable declared is the one displayed
echo $name;

$body_temp = 98; // 98 is an integer
$body_temp_new = 98.6; // 98.6 is not an integer it is a float, decimal
echo '<br>';
echo "<br>";
echo $body_temp;
echo "<br>";
echo $body_temp_new;
echo "<br>";
echo "My name is $name!";
echo "<br>";
echo 'My name is $name!';// Olga likes single quotes, easier to read when php & html are on same page

echo "<br>";
echo 'My name is '.$name.'!';// Olga likes single quotes, easier to read when php & html are on same page
echo "<br>";
echo 'The normal body temperature for a human being is '.$body_temp_new.' ';// use '. .' before and after the variable when it is inside quotes

echo "<br>";
$name = 'Sharon';
echo $name;//new $name takes precedence over prior entries of Hattie, prior $name will still show as assigned
echo "<br>";
$x = 20;
$y = 5;

$z = $x + $y;//I am using the term "assinged" vs equal bc the = sign means $z is assigned the total of $x + $y
echo $z;
echo "<br>";
$z = $x * $y;
echo $z;

echo "<br>";
$z = $x / $y;
echo $z;


echo "<br>";

$first_name = 'LaMonte';
$last_name = 'Golden';
echo $first_name." ".$last_name;//use ." ". to combine variables
echo $first_name.' '.$last_name;//use ." ". to combine variables

echo "<br>";
echo "My full name is $first_name $last_name";
echo "<br>";
echo 'My full name is '.$first_name.''. $last_name.' ';// single qoutes add .'