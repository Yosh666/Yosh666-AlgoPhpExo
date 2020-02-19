<?php
$datechaine="2018-02-23";
function formaterDateFr($datechaine){
    setlocale(LC_ALL, 'fr_FR.UTF-8');
    // $datereel= new DateTime($datechaine)
    // La fonction strtotime renvoie automatiquement une chaine de caractère en temps et c'est mieux ^^
    return  strftime ('%A %d %B %G',strtotime($datechaine));
}
echo formaterDateFr("1985-07-05");
