<?php
include ('config.php');
include('./includes/header.php');

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













?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Contact form!</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="contact">
        <h1>My Contact form</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="post">
        <fieldset>

            <legend>
            Contact LaMonte
            </legend>
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">        
            <span><?php echo $first_name_err ;?></span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">  
            <span><?php echo $last_name_err ;?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">  
            <span><?php echo $email_err ;?></span>

            <label for="phone">Phone</label>
            <input type="tel" name="phone" aria-label="Please enter your phone number" placeholder="ex. (111)-111-1111" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
            <span><?php echo $phone_err ;?></span>

            <label>Age</label>

                <ul>
                    <li><input type="radio" name="age" value="child"<?php if(isset($_POST['age']) && $_POST['age'] == 'child') echo 'checked="checked"';?>>Children 8-12 yrs old</li>

                    <li><input type="radio" name="age" value="youth"<?php if(isset($_POST['age']) && $_POST['age'] == 'youth') echo 'checked="checked"';?>>Youth 13-17</li>    

                    <li><input type="radio" name="age" value="adult"<?php if(isset($_POST['age']) && $_POST['age'] == 'adult') echo 'checked="checked"';?>>Adult</li>
                </ul>
            <span><?php echo $age_err ;?></span>
        
            

            <label>Instrument</label>
            <ul>
                <li><input type="checkbox" name="instrument[]" value="guitar"<?php if(isset($_POST['instrument']) && in_array('guitar',$instrument)) echo 'checked = "checked"';?>>Guitar</li>

                <li><input type="checkbox" name="instrument[]" value="bass"<?php if(isset($_POST['instrument']) && in_array('bass',$instrument)) echo 'checked = "checked"';?>>Bass</li>

                <li><input type="checkbox" name="instrument[]" value="piano"<?php if(isset($_POST['instrument']) && in_array('piano',$instrument)) echo 'checked = "checked"';?>>Piano</li>

                <li><input type="checkbox" name="instrument[]" value="drum"<?php if(isset($_POST['instrument']) && in_array('drum',$instrument)) echo 'checked = "checked"';?>>Drums</li>

                <li><input type="checkbox" name="instrument[]" value="voice"<?php if(isset($_POST['instrument']) && in_array('voice',$instrument)) echo 'checked = "checked"';?>>Voice</li>
               
            </ul>    
            <span><?php echo $instrument_err ;?></span>

        <label>Course location</label>    

            <select name="course_type">
                <option value=""
                <?php if(isset($_POST['course_type']) && is_null($_POST['course_type'])) echo 'selected="unselected"';?>>Select One!</option>

                <option value="online"<?php if(isset($_POST['course_type']) && $_POST['course_type'] =="online") echo 'selected="unselected"';?>>Online</option>

                <option value="in_person"<?php if(isset($_POST['course_type']) && $_POST['course_type'] =="in_person") echo 'selected="unselected"';?>>In-Person</option>

               
            </select>
            <span><?php echo $course_type_err ;?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
            <span><?php echo $comments_err ;?></span>
            
            

            <label>Privacy</label>
            <ul>
                <li><input type="radio" name="privacy" value="yes"<?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"';?>>Yes</li>
                <span><?php echo $privacy_err ;?></span>
            </ul>
            

            <input type="submit" value="Send it">

            <p><a href="">Reset</a></p>
 
 
        </fieldset>
    </form>
</body>
</html>