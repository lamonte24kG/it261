<?php
include('./includes/header.php');
if(isset($_GET['today'])){
    $today = $_GET['today'];    
}
else{
    $today = date('l');
}

switch($today){
    case 'Sunday': 
        $musician = '<h2>Sunday is Zach Tupper Day!</h2>';
        $pic = 'zach.jpg';
        $alt = 'Zach Tupper';
        $content = '<p><b>Zach Tupper</b> Guitars, pianos, banjos, mandolins, harmonicas, spoons. 
        I play the first 5 and use the last one for Lucky Charms.  
        I write my own music as well as play covers (rock, folk, indie).</p>';
        break;

    case 'Monday': 
        $musician = '<h2>Monday is Ron Weinstein Day!</h2>';
        $pic = 'Ron-Weinstein.jpg';
        $alt = 'Ron Weinstein';
        $content = '<p>You might have heard <b>Ron Weinstein</b> play with Combo Craig or Crack Sabbath, but this straight-up trio of piano, stand-up bass, and drums is jazz reminiscent of the late 50’s and early 60’s New York style. Ron brings together some of Seattle’s most expressive musicians, always tying the gig together with his creative perspective and distinctive playing style. 
        </p>';
        break;

    case 'Tuesday': 
        $musician = '<h2>Tuesday is Eric Verlinde Day!</h2>';
        $pic = 'eric.jpg';
        $alt = 'Eric Verlinde';
        $content = '<p><b>Eric Verlinde</b> is a highly trained piano accompanist in the Pacific Northwest. You are always in good hands with Eric at the keys. Specializing in multiple genres including jazz, Latin, blues, gospel and R&B. He also has a classical background and can play written music as well. He is an alumni of Berklee College of music. He has worked with some of the finest vocalist today including Marc Murphy, Thelma Huston, Dee Daniels, Greta Matassa, Sachal Vasandani and many other talented singers. He can play most music in whatever key you would like and never plays over a vocalist but instead supports and frames the vocalist. He is also available for coaching in harmony, stylizing your music and learning new tunes.</p>';
        break;

    case 'Wednesday': 
        $musician = '<h2>Wednesday is Danny Godinez Day!</h2>';
        $pic = 'danny.jpg';
        $alt = 'Danny Godinez';
        $content = '<p>Guitarist/singer-songwriter <b>Danny Godinez</b> has been a mainstay in the Seattle music scene for over a decade. He has played with a wide variety of musical figures including Carlos Santana, Jason Mraz, Tim Reynolds, and Johnny Lang. He has toured throughout Europe, Alaska, and the lower 48, and is known for his inventive and inspiring solo shows. 
        </p>
        <p>His solo performances showcase his fiery guitar technique, thoughtful vocal songs, and experimental grooves using innovative guitar looping. </p>';
        break;

    case 'Thursday': 
        $musician = '<h2>Thursday is Xavier Lecouterier Day!</h2>';
        $pic = 'xavier2.jpg';
        $alt = 'Xavier Lecouterier';
        $content = '<p>Drummer/composer<b>Xavier Lecouturier</b> has never been one to sit on the sidelines. His go-for-it approach to life can be traced back to surfing and mountain biking in the California of his youth. That ability to rise and respond to the challenges of his life has certainly been evident in his approach to his career in music.  </p>';
        break;

    case 'Friday': 
        $musician = '<h2>Friday is Farko Dosumov Day!</h2>';
        $pic = 'farko.jpg';
        $alt = 'Farko Dosumov';
        $content = '<p><b>Dosumov</b> has become one of the most versatile and in-demand electric bassists in the Pacific Northwest. He is a musician of lofty technical skills balanced by earthy blues roots, with a growling, well-defined tone and a relentlessly smoking groove and locked-in time feel. He is also a superb soloist, with a beautifully flowing and articulate melodic sense. 
        </p>';
        break; 

    case 'Saturday': 
        $musician = '<h2>Saturday is Freddy Fuego Day!</h2>';
        $pic = 'freddyfuego.jpg';
        $alt = 'Freddy Fuego';
        $content = '<p><b>Freddy \'Fuego\'</b> Gonzalez was born into a Puerto Rican family in New York City and raised on the sounds of East Harlem in the 90s and 2000s -- a mix of funk, salsa, jazz and hip-hop that heavily influences his music. 

        Music ran deep in his family: his father played the saxophone; Tio Alfred led the church choir; Tio Ray was a background singer for La India; Tio Ibrahim had a radio show in the Bronx. Freddy followed in these footsteps, picking up the trombone at the age of 13. By 18, he was performing around the city with salsa and hip-hop bands all over the city. 
        
        Now based in Seattle, Freddy has quickly turned into one of the most recognizable players on the jazz and funk scene. 
        
          
        
        He has played at venues including the Royal Room, Town Hall Seattle, Benaroya Hall, Nectar Lounge, Supernova, Sea Monster Lounge, Triple Door and more. He continues to compose for film, orchestra and small combos. 
        
          
        
        In both live performances and recordings, you\'ll find him always trying to push the envelope in some way - bending genre, rhythm and harmony to create compelling music that challenges both musician and listener. 
        </p>';
        break;       
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Page</title>
    <style>
        *{
        padding: 0;
        margin:0;
        box-sizing: border-box;
        }
        #wrapper{
            width: 940px;
            margin: 20px auto;
        }
        aside {
            padding: 5px;
            text-align: center;
        }
        main{
            padding: 10px;
            text-align:center;
        }
        li{
            text-decoration: none;
        }
    </style>
</head>
<body>
    

<div id="wrapper">

<main>

<h1>Welcome to our Daily Page!</h1>
<p>Donec et porttitor elit, a sollicitudin leo. Fusce varius sem elementum sem pharetra varius. Sed rutrum, mi vel fermentum finibus, purus mi malesuada mauris, ullamcorper pellentesque quam eros a ipsum. Duis volutpat nulla tincidunt dapibus fringilla.</p>
<?php
echo $musician;
?>
<?php
echo $content;
?>
<h2>Check out some great local musicians</h2>
<ul>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
</ul>

</main>

<aside>
<h3>Musician Spotlight</h3>
<!--<?php
echo $musician
?>-->
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
</aside>

</div>
<!--end wrapper-->
</body>
</html>
<!--footer starts here-->
<?php
include('./includes/footer.php');
