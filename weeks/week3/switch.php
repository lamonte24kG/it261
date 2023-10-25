<?php
//class coffee exercse
// if today is Friday, it will be pumpkin latte day
// INTRODUCING  the isset() function
// then we will introducce our first GLOBAL variable 
// our switch




// starting the switch
// if $GET['today']is set, $today, then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLES are capiltalized and start with $_GET 

//what is the isset function - asking if soemthing has been set

//$variable = 'This is our variable';
//if(isset($variable)) {
  //  echo 'Variable has been set';}
//else 
//echo 'Variable has not been set!';

//echo '<br>';

//if(isset($_GET['today'])){
//    echo 'Today has been set';}
//else{
//echo 'NOT!!!';}   

//$variable = 'This is our varialble';
//if(isset($variable)){
//  echo 'Variable has been set';
//}
//else
  //echo 'Variable has been set';

//echo '<br>';

//if(isset($_GET['today'])) {
  //echo 'Today has been set';
//}
//else {
  //echo 'NOT!!!';
//}

if(isset($_GET['today'])){
    $today = $_GET['today'];
}
else{
    $today = date('l');
}
//echo $today;

switch($today){
case 'Saturday':
  $coffee = '<h2>Saturday is our Pumpkin Latte Day!</h2>';
  $pic = 'pumpkin.jpg';
  $alt = 'pumpkin latte';
  $content = '<p><b>Pumpkin Spice Latte Recipe</b> | Starbucks® Coffee At Home
Place Homemade Pumpkin Spice Syrup into a mug, followed by hot espresso. Stir together. Fill mug with heated frothed milk until ¾ full, then top with whipped cream. Sprinkle with pumpkin pie spice! </p>';
break; 

case 'Sunday':
  $coffee = '<h2>Sunday is our Green Tea Latte Day!</h2>';
  $pic = 'green-tea.jpg';
  $alt = 'Green Tea';
  $content = '<p> <b>A green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';
break;

case 'Monday':
  $coffee = '<h2>Monday is our Regular Coffee Day!</h2>';
  $pic = 'coffee.png';
  $alt = 'Regular Coffee';
  $content = '<p><b>Regular coffee</b> (countable and uncountable, plural regular coffees) Coffee of the sort which is considered the default in a given area: (New England) Coffee with cream and sugar (in contrast to the expected meaning of "black coffee" in other regions of the US). (Canada) Coffee with one cream and one sugar.</p>';
break;

case 'Tuesday':
  $coffee = '<h2>Tuesday is our Latte Day!</h2>';
  $pic = 'latte.jpg';
  $alt = 'Latte';
  $content = '<p><b>latte</b> or caffè latte is a milk coffee that boasts a silky layer of foam as a real highlight to the drink. A true latte will be made up of one or two shots of espresso, steamed milk and a final, thin layer of frothed milk on top.</p>';
break;

case 'Wednesday':
  $coffee = '<h2>Wednesday is Cappuccino Day!</h2>';
  $pic = 'cap.jpg';
  $alt = 'Cappuccino';
  $content = '<p><b>Cappuccino</b>is an espresso-based coffee drink that is traditionally prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.</p>';
break;

case 'Thursday':
  $coffee = '<h2>Thursday is Espresso Day!</h2>';
  $pic = 'espresso-glas.jpg';
  $alt = 'espresso';
  $content = '<p><b>Espresso</b> is one of the most popular coffee-brewing methods, of Italian origin. The French also made a significant contribution to the invention of the first coffee makers, predecessors of today\'s espresso machines, and generally to the café culture. </p>';
break;

case 'Friday':
  $coffee = '<h2>Friday is Americano Day!</h2>';
  $pic = 'americano.jpg';
  $alt = 'americano';
  $content = '<p> <b>Caffè mocha</b>, also called mocaccino, is a chocolate-flavoured warm beverage that is a variant of a caffè latte, commonly served in a glass rather than a mug. Other commonly used spellings are mochaccino and also mochachino.</p>';
break;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Classwork Exercise</title>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    #wrapper {
      width: 940px;
      margin: 20px auto;
    }
 
    h1, h2, img{
      margin-bottom:10px;
    }

    p{
      margin-bottom:20px;
    }

 </style>
</head>
<body>
  <div id="wrapper">
    <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<!--<img src="./images/<?php   ;?>"   alt="">-->
<?phpecho $content;?>
<h2>Check out our Daily Specials</h2>
<p><i>Pleae complete all days of the week</i></p>
<ul>
  <li><a href="switch.php?today=Saturday">Saturday</a></li>
  <li><a href="switch.php?today=Sunday">Sunday</a></li>
  <li><a href="switch.php?today=Monday">Monday</a></li>
  <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
  <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
  <li><a href="switch.php?today=Thursday">Thursday</a></li>
  <li><a href="switch.php?today=Friday">Friday</a></li>
</ul>
</div>
<!--end wrapper-->
</body>
</html>
