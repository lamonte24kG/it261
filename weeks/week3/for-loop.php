<?php
//  this file will demonstrate for loops and in addition to placing your php inside your HTML!!!
//The for loop - loops through a block of code a specified number of times.
//for (unit counter; increment counter) {code toe be executed for each itieration; }

// celcius and fahrenheit

// $far = ($cel * 9/5) + 32;
// $miles = ($kil * 621371/1000000);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My for loop Tables</title>
    <style>

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        table {
            width: 500px;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid purple;
        }
        td, th {
            border: 1px solid purple;
            border-collapse: collapse;
            padding: 5px; 
        }

        h1, h2 {
            text-align:center;
            margin: 10px 0;
            color: green;
        }
    </style>

</head>
<body>
    <!--<h1>My Celcius / Farenheit Table!</h1>-->

    <div id="temperature">
    <h1>My Celcius / Farenheit Table</h1>
    <table>
    <tr>
        <th>Celcius</th>

        <th>Fahrenheit</th>
    </tr> 
    <?php
    for($cel = 0; $cel <= 100; $cel +=3){
        $far = ($cel * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees</td>';
    echo '<td> '.number_format($far, 0).' degrees</td>';
    echo '</tr>';
    }
    ?>
    


    </table>
    </div>
    <!--end div temperature-->  
    <div id="mileage">
    <h1>My Kilometer / Mileage Table</h1>
    <table>
    <tr>
        <th>Kilometer</th>

        <th>Miles</th>
    </tr> 
    <?php
    for($kil = 0; $kil <= 100; $kil +=5){
        $miles = ($kil * 621371/1000000);
        //$far = ($cel * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$kil.' kmh</td>';
    echo '<td> '.number_format($miles, 0).' mph</td>';
    echo '</tr>';
    }
    ?>
    


    </table>
    <!--<h2>You will now complete a kilometer/mileage table on your own!</h2>-->
</div><!--end div mileage-->
</body>
</html>
