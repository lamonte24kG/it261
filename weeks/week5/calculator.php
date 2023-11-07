<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>

    <!--https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
        <fieldset>
            <label>NAME</label>
            <input type="text" name="name" value="
            <?php
            if(isset($_POST['name']))
            echo htmlspecialchars($_POST['name'])
            ;?>
            ">

            <label>Total miles driving?</label>
            <input type="number" name="miles" value="
            <?php
            if(isset($_POST['miles']))
            echo htmlspecialchars($_POST['miles'])
            ;?>
            ">

            <label>How fast do you typically drive?</label>
            <input type="number" name="speed" value="
            <?php
            if(isset($_POST['speed']))
            echo htmlspecialchars($_POST['speed'])
            ;?>
            ">

            <label>How many hours per day do you plan on driving?</label>
            <input type="number" name="hours" value="
            <?php
            if(isset($_POST['hours']))
            echo htmlspecialchars($_POST['hours'])
            ;?>
            ">
<!--time for our radio button that has an additional attribute VALUE-->  
            <label>Price of gas</label>

            <ul>
            <li><input type="radio" name="price"  
            value="3.00" 
                <?php if(isset($_POST['price']) && $_POST['price']== "3.00") 
                    echo 'checked="checked"' 
                ;?>> $3.00</li>

            <li><input type="radio" name="price"  
            value="3.50" 
                <?php if(isset($_POST['price']) && $_POST['price']== "3.50") 
                    echo 'checked="checked"' 
                ;?>> $3.50</li>

            <li><input type="radio" name="price"  
            value="4.00" 
                <?php if(isset($_POST['price']) && $_POST['price']== "4.00") 
                    echo 'checked="checked"' 
                ;?>> $4.00</li>
            </ul>

            <label>Fuel efficiency</label>
            
            <select name="mpg">
            <option value=""
                <?php
                if(isset($_POST['mpg']) && $_POST['mpg'] == NULL)
                echo 'selected = "unselected"'
                ;?>
                >Select one!</option>
            <option value="40"
                <?php
                if(isset($_POST['mpg']) && $_POST['mpg'] == '40')
                echo 'selected = "selected"'
                ;?>
                >Great @ 40mpg</option>
            <option value="25"
                <?php
                if(isset($_POST['mpg']) && $_POST['mpg'] == '25')
                echo 'selected = "selected"'
                ;?>
                >Average @ 25mpg</option>
            <option value="10"
                <?php
                if(isset($_POST['mpg']) && $_POST['mpg'] == '10')
                echo 'selected = "selected"'
                ;?>
                >Terrible @ 10mpg</option>
            </select>

            <input type="submit" value="Calculate" name="calculate">

            <p><a href="">Reset it!</a></p>

        </fieldset>
    </form>

<?php
//we will start with the server request method
//then, we will ask ourselves if any fields are empty
//if the fields are not empty, we will elseif they are set

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['name'])){
        echo'<p class="error">Please fill out your name!
        </p>';
    }

    if(empty($_POST['miles'])){
        echo'<p class="error">Please fill out your total miles!
        </p>';
    }

    if(empty($_POST['speed'])){
        echo'<p class="error">Please fill out how fast you drive!
        </p>';
    }

    if(empty($_POST['hours'])){
        echo'<p class="error">Please fill out how many hours you drove!
        </p>';
    }

    if(empty($_POST['price'])){
        echo'<p class="error">Please choose your price of gas!
        </p>';
    }

    if(isset($_POST['name'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['mpg'],
    $_POST['hours']
    )){
    $name = $_POST['name'];
    $speed = $_POST['speed'];
    $miles = $_POST['miles'];
    $hours = $_POST['hours'];
    //$currenc = floatval($_POST['currency']);
    $mpg = $_POST['mpg'];
    $mileage = $miles / $hours;
    $days = $mileage / $hours;

    //if(!empty($name && $email && $amount && $currency && $bank)){
    if(!empty($name && $miles && $speed && $hours) && ($mpg !=NULL)){

    echo '
    <div class="box">
    <h2>Hello '.$name.',</h2>
    <p>You will be traveling '.number_format($mileage, 2).' hours, taking '.number_format($days, 2).'</p>
    <p>And, you will be using 
    </p>
    ';    
    }
}

}//end server request
?>
    
</body>
</html>