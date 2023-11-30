<?php
//mes differentes variable

$myBool="true";
$myBool2="false";
$ent="8";
$varchar="on fait un petit tableau";
$float=1.256;
?>
<style>
table, td {
    border:solid black 5px;
    background-color: brown;
}
</style>

<table>
    
        <td>LEQUEL</td>
        <td>TYPE</td>
        <td>NOM</td>
        <td>VALEUR</td>
    
    <tr>
        <td>numero 1 </td>
        <td><?php echo"booleen";?> </td>
        <td><?php echo"\$myBool";?></td>
        <td><?php echo $myBool;?></td>
    </tr>

    <tr>
        <td>numero 2 </td>
        <td><?php echo"booleen";?> </td>
        <td><?php echo"\$myBool2";?></td>
        <td><?php echo $myBool2;?></td>
    </tr>

    <tr>
    <td>numero 3 </td>
        <td><?php echo"entier";?> </td>
        <td><?php echo"\$ent";?></td>
        <td><?php echo $ent;?></td>
    </tr>
    <tr>
    <td>numero 4 </td>
        <td><?php echo"chaine";?> </td>
        <td><?php echo"\$varchar";?></td>
        <td><?php echo $varchar;?></td>
    </tr>

    <tr>
    <td>numero  5</td>
        <td><?php echo"flottant";?> </td>
        <td><?php echo"\$float";?></td>
        <td><?php echo $float;?></td>
    </tr>
    
   
    
    
</table>
