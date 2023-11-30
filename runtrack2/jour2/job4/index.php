<?php 
$nbr=0;


while ($nbr<= 99){
/*echo "<br/>" .*/ $nbr++;

if(!($nbr%3) and !($nbr%5)){
    echo "<br/> fizzbuzz";
}
 else if (!($nbr%3)){
    echo "<br/> fizz";
 }
else if(!($nbr%5)){
    echo "<br/> buzz";  
}

else{
    echo "<br/>" .$nbr;
}

}
