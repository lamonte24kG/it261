<?php
// our errors file that we will be using a foreach loop
//array_push - different messages for different errors

// if we have errors - we need to display them

 if(count($errors) > 0) ;?>

<div class="errors">
<?php foreach($errors as $error) ; ?>
<p>
<?php echo $errors; ?>
</p>
<?php endforeach; ?>

</div>
<!--end div-->

<?php endif ;?>