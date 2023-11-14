<?php

ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){
    case 'index.php';
    $title = 'Home page of our Website Project';
    $body = 'home';
    break;

    case 'about.php';
    $title = 'About page of our Website Project';
    $body = 'about inner';
    break;

    case 'daily.php';
    $title = 'Daily page of our Website Project';
    $body = 'daily inner';
    break;

    case 'project.php';
    $title = 'Project page of our Website Project';
    $body = 'project inner';
    break;

    case 'contact.php';
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';
    break;

    case 'gallery.php';
    $title = 'gallery page of our Website Project';
    $body = 'gallery inner';
    break;
}
//our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

function make_links($nav){
    $my_return = '';
    foreach($nav as $key => $value){
    if(THIS_PAGE == $key){
    $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
    }else{
    $my_return .= '<li><a href="'.$key.'"> '.$value.'</a></li>';
    }
    
    }//end foreach
    return $my_return;
    
    }//end function


//this is the beginning of the switch for  homework 3!!!!
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
//my forms PHP

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$age = '';
$instrument = '';
$course_type = '';
$privacy = '';
$comments = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$age_err = '';
$instrument_err = '';
$course_type_err = '';
$privacy_err = '';
$comments_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST"){

//if inputs are empty, we will declare a statement else we will assign the $_POST to a variable
// $instrument = $_POST['instrument']
//if instrument
if(empty($_POST['instrument'])){
//say something or do something
$instrument_err = 'Please select an instrument';

} else {
    $instrument = $_POST['instrument'];
}

//if first_name
if(empty($_POST['first_name'])){
    //say something or do something
    $first_name_err = 'Please fill out your first name?';

} else {
        $first_name = $_POST['first_name'];
}

//if last_name
if(empty($_POST['last_name'])){
    //say something or do something
    $last_name_err = 'Please fill out your last name';
        
} else {
$last_name = $_POST['last_name'];
}

//if email
if(empty($_POST['email'])){
    //say something or do something
    $email_err = 'Please fill out your email';
    
} else {
$email = $_POST['email'];
}

//if phone
if(empty($_POST['phone'])){
    //say something or do something
    $phone_err = 'Please fill in your phone number';
    
} else {
$phone = $_POST['phone'];
}

//if age
if(empty($_POST['age'])){
    //say something or do something
    $gender_err = 'Please check your age group';
    
} else {
$age = $_POST['age'];
}

//if instrument
if(empty($_POST['instrument'])){

    $instrument_err = 'Please choose your instrument';
    
} else {
$instrument = $_POST['instrument'];
}

//if course type
if($_POST['course_type'] == NULL){

    $course_type_err = 'Please choose your course type';
    
} else {
$course_type = $_POST['course_type'];
}
//if comments
if(empty($_POST['comments'])){
    //say something or do something
    $comments_err = 'We value your input';
    
} else {
$comments = $_POST['comments'];
}

//if privacy
if(empty($_POST['privacy'])){
    //say something or do something
    $privacy_err = 'You must agree to receive spam email!';
    
} else {
$privacy = $_POST['privacy'];
}



function my_instruments($instrument){
$my_return='';
if(!empty($_POST['instrument'])){
    $my_return = implode(',', $_POST['instrument']);
}
return $my_return;
}//end my_instruments function


if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['age'],
$_POST['phone'],
$_POST['instrument'],
$_POST['course_type'],
$_POST['comments'],
$_POST['privacy'])){


$to = 'wlgolden@gmail.com';
$subject = 'Test email on     '.date('m/d/y, h i A');
$body = '
First Name:  '.$first_name.' '.PHP_EOL.'
Last Name:  '.$last_name.' '.PHP_EOL.'
Email:  '.$email.' '.PHP_EOL.'
Age:  '.$age.' '.PHP_EOL.'
Instrument:  '.my_instruments($instrument).' '.PHP_EOL.'
Course Type:  '.$course_type.' '.PHP_EOL.'
Phone:  '.$phone.' '.PHP_EOL.'
Comments:  '.$comments.' '.PHP_EOL.'

';

$headers = array(
    'From' => 'noreply@gmail.com'
);

//we will be adding an if statement - that this email form will work ONLY i f all the fields are filled out!!!

if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $phone && 
    $age &&
    $instrument &&
    $course_type &&
    $comments)){

        mail($to, $subject, $body, $headers);
        header ('Location:thx.php');
    }
//don't forget, you must upload your form onto the server to receive an email



}//end of isset


}//closing server request method


