<?php
    $sexe="F";
    $age=32;
    if ($sexe=="F"&& $age>=18 && $age<=35){
        echo "vous êtes imposable";
    }
        elseif($sexe!="F"&&$age>=20){
            echo "vous êtes imposable";
        }
        else {
            echo "vous n'êtes pas imposable chanceux va";
        }
?>