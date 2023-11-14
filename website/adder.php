<html>
<head>
<title>My Adder Assignment</title>
<style>
    .box{
        text-align:center;
    }
    fieldset{
        border-color: red;
        max-width: 400px;
        margin: auto;
    
    }
</style>
</head>
<body>
    <div class="box">
<h1>Adder.php</h1> 
<form action="" method="post">
<fieldset>
    <label>Enter the first number:</label>
    <input type="text" name="num1"><br>

    <label>Enter the second number:</label>
    <input type="text" name="num2"><br>

    <input type="submit" value="Add Em!!"> 
</fieldset>
</form>
 
<?php     //adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added '. $num1 .' and ' .$num2. '</h2>';

echo ' <p style="color:red;"> and the answer is <br>

' .$myTotal. '!"</p>';

echo'<p><a href="">Reset page</a></p>';
}
;?>

</div><!--end div-->
</body>
</html>