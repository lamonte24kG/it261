<?php

//do not call out the hearder include yet!!!
//the following information is above the doc type -  if its above the doctype you cannot echo anything
include('config.php');

// is id set???

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];


}else{
    header('Location: project.php');
}

$sql = 'SELECT *  FROM project WHERE people_id = '.$id.' ';


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
$first_name = stripcslashes($row['first_name']);
$last_name = stripcslashes($row['last_name']);
$email = stripcslashes($row['email']);
$birthdate = stripcslashes($row['birthdate']);
$bands = stripcslashes($row['bands']);
$blurb = stripcslashes($row['blurb']);
$details = stripcslashes($row['details']);
//will i add a column
$feedback = '';




    } // close while loop





    

}else{
    $feedback ='Houston, we have a problem';
}

include('./includes/header.php');

?>

<div id="wrapper">
    
<main>
<h1>Welcome to our Project View Page</h1>
<h2>Introducing: <?php echo $first_name;?></h2>
<ul>
<?php
echo '
<li><b>First Name:</b>'.$first_name.'</li>
<li><b>last Name:</b>'.$last_name.'</li>
<li><b>Email:</b>'.$Email.'</li>
<li><b>Birthdate:</b>'.$birthdate.'</li>
<li><b>Occupation:</b>'.$bands.'</li>
';
?>
</ul>
<p><?php echo $details;?></p>
<p>Return to our <a href="people.php"> project page!</a></p>



</main>


<aside>
<h3>Featured Artist!</h3>
<figure>
<img src="./images/project<?php echo $id;?>.jpg" alt="<?php echo $first_name;?>">
<figcaption>
    <?php echo $blurb;?>
</figcaption>
</figure>

</aside>

</div>
<!--end wrapper-->

<?php

mysqli_free_result($result);

mysqli_close($iConn);

include('./includes/footer.php');