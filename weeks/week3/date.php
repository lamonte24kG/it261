<?php
// date function and if statement
echo date('Y');
echo'<br>';
echo date ('l, F j, Y H:i: A');

echo'<br>';
date_default_timezone_set('America/Los_Angeles');

echo'<br>';
echo date ('l, F j, Y H:i: A');

echo'<br>';
$name = 'LaMonte';
$our_time = date('H:i A');
echo'<br>';
echo $our_time;

//The logic is this
// IF the time is less than or equal to 11, then it is morning
// IF yhe time is less than or equal to 17, which equal 5, then it is afternoon
// now we will have an else, that will mean it is evening!

if($our_time <= 11){
    echo '<h2 style="color:yellow;"> Good Morning, '.$name.'</h2>
    <image src="./images/morning_sun" alt="morning sun">
    <p>It\'s time to get up!</p>
    ';
}
elseif($our_time <= 17){
    echo ' <h2 style="color:green;"> Good afternoon, '.$name.'</h2>
    <img src="./images/afternoon_sun.png" alt="afternoon sun">
    <p>Great day to be outside!</p>
    ';
}
else{
    echo ' <h2 style="color:blue;"> Good evening, '.$name.'</h2>
    <img src="./images/smiling_sun.png" alt="smiling sun">
    <p>Good evening!</p>
    ';

}