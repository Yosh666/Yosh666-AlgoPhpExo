<?php

$age = 32;
$sexe = "F";

$C1 = $age > 20 && $sexe == "M";
$C2 = $sexe == "F" && ($age >= 18 && $age <= 35);

if($C1 || $C2){
    echo "imposable";
}else{
    echo "non imposable";
}

// écriture ternaire
($C1 || $C2) ? $imp = "imposable" : $imp = "non imposable";

echo "La personne est : ". $imp;
