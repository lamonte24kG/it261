<?php
include ('config.php');
include('./includes/header.php'); ?>

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
