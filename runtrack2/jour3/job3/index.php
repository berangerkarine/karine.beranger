<?php
$str= " I'm sorry Dave I'm afraid I can't do that";
$voyelles=['a','e','i','o','u','y','A','E','I','O','U','Y'];
$largeurtext=strlen($str);
$echo ="";

foreach(str_split($str) as $lettre){
    if(in_array($lettre, $voyelles)){
        $echo.=$lettre;
    }
}
echo $echo;