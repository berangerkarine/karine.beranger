<?php 
$nbr=0;


while ($nbr <= 99){
/*echo "<br/>" .*/ $nbr++;


 if ($nbr<=20){
    echo "<br/><i>" .$nbr ."</i>";
 }
else if($nbr>=25 and $nbr<=41 or $nbr>=43 and $nbr<=50) {
    echo "<br/><u>" . $nbr ."</u>";  
}
else if($nbr==42){
    echo "<br/> laplateforme";
}
else{
    echo "<br/>" .$nbr;
}
}