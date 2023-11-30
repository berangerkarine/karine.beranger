
<?php
$phrase="Dans l'espace personne ne vous entend crier";
$resultNbrCarac= comptcarac($phrase);

function comptcarac($phrase){
    $nbrdecarac=0;

    foreach(str_split($phrase) as $caractere){
        $nbrdecarac++;
    }
    return $nbrdecarac;
}
    echo "phrase de base : $phrase<br/>";
    echo "nbr de caracteres dans la phrase de base : $resultNbrCarac"; 
/*array(
    key=>
)*/

