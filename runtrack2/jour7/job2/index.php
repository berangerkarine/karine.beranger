<?php 
   
    
function Bonjour($jour){
    
   if ($jour === true) {
        return "Bonjour";
   }else{
        return "Bonsoir";
   }
   
}
echo Bonjour($jour);