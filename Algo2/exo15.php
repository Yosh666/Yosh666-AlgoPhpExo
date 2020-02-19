<?php
/*L’adresse elan@elan-formation.fr est une adresse e-mail valide
L’adresse contact@elan est une adresse e-mail invalide*/
//FILTER_VALIDATE_EMAIL 
$email1='elan@elan-formation.fr';
$email2='contact@elan';
function validerMail($email1){
    if (filter_var($email1, FILTER_VALIDATE_EMAIL)){
        $validation=true;
    }
    else{
         $validation=false;
    }
    if ($validation){
        echo "L'adresse $email1 est une adresse mail valide<br>";
    }
    else {
        echo "L'adresse $email1 est une adresse invalide<br>";
    }
}
validerMail($email1);
validerMail($email2);
?>