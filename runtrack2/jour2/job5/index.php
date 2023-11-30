<?php
/*$nbr=1;

while ($nbr<= 99)
    echo "<br/>" .$nbr++;*/
//je fais ma petite function pour la rappeler plus tard

function nbrPrem( $nbr) {
    for ($k=2; $k<$nbr; $k++){
        if ($nbr %$k == 0){
            return false;
        }
    }
            return true;
    }

echo "<br/> les nbrs premiers jusqu'à 1000";
for($k=3; $k<1000; $k++){
    if(nbrPrem($k)){
        echo "<br/>" .$k;
    }
}


