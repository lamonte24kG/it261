<?php
// this is our server page that will be communicating to the database

// our sesssion - this is where we will start our session - it is a way to store the information
// we would like the information that is inputted via our registation form to land in our databse!!!

session_start();

include('config.php');

// we will eventually have a header include
// include('./includes/header.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// we will be asking if reg_user isset
// we will also be using a new function which is mysqli_real_escape_string

if(isset($_POST['reg_user'])){

$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
$password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

// what message do we want to display to the end user if they are not inputting the information?
// if empty - we are going to say something
// introducing a new function - array_push();

if(empty($first_name)) {
    array_push($errors, 'First name is required');
}

if(empty($last_name)) {
    array_push($errors, 'Last name is required');
}

if(empty($email)) {
    array_push($errors, 'Email name is required');
}

if(empty($username)) {
    array_push($errors, 'Username is required');
}

if(empty($password1)) {
    array_push($errors, 'Password is required');
}

// logic - we are not going to ask if  password2 is empty, or question is
// does password1 == to password2

if($password1 !== $password2) {
    array_push($errors, 'Passwords do not match');
}

// we now have to select from teh table where username = username and password = password...AND limit 1
$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";


$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// we can only have one unique email, or one unique username -
// if there is a username in our database, the end use cannot use that username
// if there is already an eamil in our database, the end user cannot use that email


if($rows){

if($rows['username'] == $username){
    array_push($errors, 'Username already exists!');
}

if($rows['email'] == $email){
    array_push($errors, 'Email already exists!');
}






}// end big if state

//if there are NO errors, life is very good!

if((int)$errors == 0){

$password = md5($password1);//md5 converts user password into 32 character password


// logically - we have to insert the information into our database

$query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password') ";

mysqli_query($iConn, $query);

$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

header('Location:login.php');


} //end if errors

} //closed if isset reg_user

// we must now see if our login_user has been set!

if(isset($_POST['login_user'])){
    // our login page will only have two input fields - one for username and one for password
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

// if the end user does not fill imn their username, a message appears

    if(empty($username)) {
        array_push($errors, 'Username is required');
    }

    if(empty($password)) {
        array_push($errors, 'Password is required');
    }
    
    // we are counting our errors, and if we have no errors - we will continue the same way

if(count($errors) == 0){

$password = md5($password);

//we are going to query our users table to make sure that our username AND password match

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

$results = mysqli_query($iConn, $query);

if(mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

// if the above is successful, we will be directed to the index.php!!!

header('Location:index.php');


}else{

array_push($errors, 'Wrong username/password combo!!!');

}



} // end count errors



}  // close if isset login_user