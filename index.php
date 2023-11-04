<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT 261 Portal page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">

</head>
<body>

<header>
    <h1>Welcome to my IT261 Portal Page</h1>
   
 
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="./website/daily.php">Switch</a></li>
                <li><a href="#">Troubleshoot</a></li>
                <li><a href="#">Calculator</a></li>
                <li><a href="#">Database</a></li>
                <li><a href="#">Email</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>
        </nav>

</header>

<div id="wrapper">

    <main>
        
        <div class="image-container">
        <img src="images/BassFace.jpg" alt="bassface">
        <h1>Greetings</h1>
        <p>Hello,  

            I am LaMonte Golden. This is my third quarter in the Web Design program. It’s been about a year since I took my last coding class so I’m a little rusty to say the least.</p>
            
            <p>I am the Media Manager for a pub/live music venue in Pioneer Square. You can find me livestreaming bands on the weekends. </p>
            
            <p>I look forward to this adventure in learning. 
            </p>

    </div>
    <!--end div image-container-->
    <div id="mamp">
        <img src="images/mampscreenshot.png" alt="mamp image">
        <img src="images/php-error.png" alt="phperror">
        
    </div>
    <!--end div mamp-->

    </main>

    <aside>
        <h2>Weekly Class Exercises</h2>

        <h2>Week 2</h2>
        <nav>
            <ul>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/vars2.php">var2.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="weeks/week2/currency.php">currency.php</a></li>
                <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
            </ul>
        </nav>

        <h2>Week 3</h2>
            <ul>
                <li><a href="weeks/week3/if.php">if.php</a></li>
                <li><a href="weeks/week3/for-each.php">foreach.php</a></li>
                <li><a href="weeks/week3/for-loop.php">forloop.php</a></li>
                <li><a href="weeks/week3/date.php">date.php</a></li>
                <li><a href="weeks/week3/switch.php">switch.php</a></li>
            </ul>

        <h2>Week 4</h2>
        <nav>
            <ul>
                <li><a href="weeks/week4/form1.php">form1.php</a></li>
                <li><a href="weeks/week4/form2.php">form2.php</a></li>
                <li><a href="weeks/week4/form3.php">form3.php</a></li>
                <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                <li><a href="weeks/week4/celcius.php">celcius.php</a></li>
            </ul>
        </nav>
    
       <h2>Week 5</h2>
        <nav>
            <ul>
                <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
                <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
                <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
                <li><a href="weeks/week5/null.php">null.php</a></li>
            </ul>
        </nav>

        <h2>Week 6</h2>
        <nav>
            <ul>
                <li><a href="#">form1.php</a></li>
                <li><a href="#">functions.php</a></li>
                <li><a href="#">implode.php</a></li>
            </ul>
        </nav>

        <h2>Week 7</h2>
        <nav>
            <ul>
                <li><a href="#">random.php</a></li>
                <li><a href="#">strings.php</a></li>
                <li><a href="#">pictures.php</a></li>
            </ul>
        </nav>

        <h2>Week 8</h2>
        <nav>
            <ul>
                <li><a href="#">people.php</a></li>
            </ul>
        </nav>
    </aside>
   

   
    <!--end mamp-->


</div>
<!--end wrapper-->

<footer>
    <ul>
        <li>Copyright &copy;
            2023</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by LaMonte Golden</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
        
</footer>
    
</body>
</html>