<?php
include ('config.php');
include('./includes/header.php'); ?>

<div id="wrapper">

<?php
$people['James_Jamerson'] = 'jame_American bass player. He was the uncredited bassist on most of the Motown Records hits in the 1960s and early 1970s (Motown did not list session musician credits on their releases until 1971), and is now regarded as one of the most influential bass players in modern music history. He was inducted into the Rock and Roll Hall of Fame in 2000. As a session musician he played on twenty-three Billboard Hot 100 number-one hits, as well as fifty-six R&B number-one hits.';
$people['Larry_Graham'] = 'larr_American bassist and baritone singer, both with the psychedelic soul funk band Sly and the Family Stone and as the founder and frontman of Graham Central Station. He is credited with the invention of the slapping technique on the electric bass guitar.';
$people['Bootsy_Collins'] = 'boot_American bass guitarist, singer-songwriter, and record producer. Rising to prominence with James Brown in the early 1970s before joining the Parliament-Funkadelic collective.';
$people['Thundercat'] = 'thun_Thundercat. Born Stephen Bruner, the bassist grew up in a musical family and landed a gig early on with thrash-punk veterans Suicidal Tendencies. His sounds have defined the vanguard of hip-hop, jazz, R&B, electronica, and beyond during the past decade-plus — including records made by Kendrick Lamar, Janelle Monáe, Flying Lotus, Kamasi Washington, Erykah Badu, Childish Gambino, and more.';
$people['Flea'] = 'flea_Flea was born in Melbourne, Australia; he is best known as the co-founder and bassist of the rock band Red Hot Chili Peppers. Flea incorporates elements of funk (including prominent slap bass), psychedelia, punk, and hard rock in his playing. In 2009, Rolling Stone readers ranked Flea the second-best bassist of all time, behind John Entwistle.';

//variable     key      value
//$name                 $image


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7, class exercise - pictures</title>
    <style>
    

    table{
        border: 1px solid red;
        border-collapse: collapse;
        table-layout: fixed;
        width: 200px;
    }
    
    td{
        border: 1px solid red;
        width: 400px;
        vertical-align: top;
    }

    td img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
    
    </style>

</head>
<!--when you have an array you must start with a foreach loop, you cannot just say echo people, it will not work-->
<body>
<table>
<?php foreach($people as $name => $image)  :?>  
<tr>
<td><img src="images/<?php echo substr($image, 0, 4);?>.jpg" alt="<?php echo str_replace('_', ' ', $name)  ;?>"></td>
<td><?php echo str_replace('_', ' ', $name)  ;?></td>
<td><?php echo substr($image, 5, -1);?>
</tr>
<?php endforeach ;?>
</table>
</body>
</html>