<?php
// concatenation
// operators -- assignment operators
// some preset functions
// arrays

$name = 'LaMonte';
$first_name = 'LaMonte';
$last_name = 'Golden';
echo '<br>';
$name = 'LaMonte';
$name .= ' Golden';// the . before the = combines the assigned values of $name & name . 
echo $name;

echo '<br>';

$color = 'red';
echo $color;

echo '<br>';
echo 'LaMonte\'s favorite color is '.$color.'  ';// when using ' as plural use \before ' so it is not read as closing '  

echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';
$x = 20;
$x += 5;
echo $x;//this is a shorter method for addition using only the variable $x

echo '<br>';
$x = 100;
$x *=10;//you can multiply * divide / add + or subtract - 
echo $x;

echo '<br>';
echo '<h3>Our product, quantity and tax exercise</h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097;
echo $total;
echo '<h3>We would like our about to reflect 2 decimal places -- we are thinking about floats and a new function - number_format()</h3>';
$product = 120;// is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format ($total, 2); // new variable created $total_friendly to add the number format. in the number_format (the first variable is the target, the second is how many decimals)
//echo $total_friendly;
echo 'We have a total of <b>$'.$total_friendly.'</b> dollars';
echo '<br>';

$product = 120;// is our integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.098;
echo 'We have a total of <b>$'.number_format($total, 2).'</b> dollars';
echo '<h3>Our second preset function is our date function!</h3>';
echo date ('Y');
echo '<br>';
echo date ('l');// l is for day of the week
echo '<br>';
echo date("l jS \of F Y h:i:s A");// Prints the day, date, month, year, time, AM or PM h-hours i-minutes s-seconds

echo '<br>';
echo date("l jS \of F Y h:i A");

echo '<br>';
date_default_timezone_set ('America/Los_Angeles');
echo '<br>';
echo date("l jS \of F Y h:i A");

echo '<h3>Time for an array!</h3>';
echo '<h4>Below is an indexed array</h4>';
//can we echo an array??? no we can not
$fruit [] = 'bananas';//[] indicates an array
$fruit [] = 'cherries';
$fruit [] = 'melon';
$fruit [] = 'kiwi';
$fruit [] = 'oranges';
$fruit [] = 'apples';

echo $fruit;
echo '<br>';
echo $fruit[2];//will be melons, numberinhg in php starts with zero

$fruit = array(
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples',
);
$fruit = [
    'bananas', 
    'cherries',
    'melon',
    'kiwi',
    'oranges',
    'apples',
];

echo '<br>';
print_r ($fruit);
echo '<br>';
var_dump ($fruit);

echo '<h3>Now we have an associate array</h3>';

$nav = array(
    'index.php' => 'Home',// index is the key Home is the value
    'About.php' => 'About',
    'Daily.php' => 'Daily',
    'Project.php' => 'Project',
    'Contact.php' => 'Contact',
    'Gallery.php' => 'Gallery',
);

echo '<pre>';
var_dump ($nav);
echo '</pre>';