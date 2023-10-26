<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Our Arithmetic Form</h1>
    <form action="" method="post">
        <fieldset>
            <label>Name</lable>
            <input type="text" name="name">
            
            <label>Phone</lable>
            <input type="tel" name="phone">
        
            <label>How many Lattes?</lable>
            <input type="number" name="lattes">

            <label>How many Capuccinos?</lable>
            <input type="number" name="capuccinos">

            <label>How many Americanos?</lable>
            <input type="number" name="americanos">

            <label>Special Requests?</lable>
            <textarea name="comments"></textarea>

            <input type="submit" value="Send my order">

        </fieldset>
    </form>
    <p><a href="">Reset</a></p>

<?php
//name, phone, lattes, capuccinos, americanos, comments

date_default_timezone_set('America/Los_Angeles');
$our_time = date('H:i');

if(isset($_POST['name'],
$_POST['lattes'],
$_POST['capuccinos'],
$_POST['americanos'],
$_POST['comments'])) {

//add my if statement regarding fields that are not empty

if(empty($_POST['name']&&
$_POST['phone']&&
$_POST['lattes']&&
$_POST['capuccinos']&&
$_POST['americanos']&&
$_POST['comments'])){

echo'<p class="error">Please fill out all of the fields</p>';


}else{

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $lattes = $_POST['lattes'];
    $capuccinos = $_POST['capuccinos'];
    $americanos = $_POST['americanos'];
    $comments = $_POST['comments'];
    $total = $lattes + $capuccinos + $americanos;

//if and elseif statement regarding our time

if($our_time <= 11){
$our_time = "Good Morning";

}elseif($our_time <= 17){
$our_time = "Good Afternoon";

}else{
$our_time = "Good Evening";

}

echo'
<div class="box">
<h2>'.$our_time.' '.$name.'!</h2>
<p>We have texted your order to this number '.$phone.' totaling '.$total.' beverages:</p>
<ul>
<li>'.$lattes.' lattes</li>
<li>'.$capuccinos.' capuccinos</li>
<li>'.$americanos.' americanos</li>

</ul>
<br>
<p>And this is your special <b>request</b>: '.$comments.'</p>
<p>Thank you for choosing our establishment!
</p>
</div>
';




}



}//end of isset


    ?>


</body>
</html>