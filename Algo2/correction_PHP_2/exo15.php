<?php

$email = "elan@elan-formation.fr";
$ip = "192.168.1.255";

echo verifierMail($email);
echo verifierIp($ip);

function verifierMail($email){
    $resultat = "L'adresse $email mail n'est pas valide<br>";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $resultat = "L'adresse $email mail est valide<br>";
    }
    return $resultat;
}

function verifierIp($ip){
    $resultat = "L'adresse IP $ip n'est pas valide<br>";
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        $resultat = "L'adresse $ip est valide<br>";
    }
    return $resultat;
}
