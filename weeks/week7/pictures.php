<?php
$people['Donald_Trump'] = 'trump_trum2_Former President future inmate from NY.';
$people['Joe_Biden'] = 'biden_bide2_President from PA.';
$people['Hilary_Clinton'] = 'clint_clin2_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_sand2_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_warr2_Senator from MA.';
$people['Kamala_Harris'] = 'harri_harr2_Vice President from CA.';
$people['Cory_Booker'] = 'booke_book2_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_ayan2_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_butt2_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_klob2_Senator from MN.';
$people['Julian_Castro'] = 'castr_cast2_Former Housing/Urban from TX.';
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
    }
    
    td{
        border: 1px solid red;
    }
    
    </style>

</head>
<!--when you have an array you must start with a foreach loop, you cannot just say echo people, it will not work-->
<body>
<table>
<?php foreach($people as $name => $image)  :?>  
<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name)  ;?>"></td>
<td><?php echo str_replace('_', ' ', $name)  ;?></td>
<td><?php echo substr($image, 12, -1);?>
<?php str_replace('_', ' ', $image)  ;?></td> 
<td><img src="images/<?php echo substr($image, 6, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name)  ;?>"></td>
</tr>
<?php endforeach ;?>
</table>
</body>
</html>