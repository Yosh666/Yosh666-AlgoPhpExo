<?php

$texte = "Ma phrase à convertir";
echo convertirMajRouge($texte);

function convertirMajRouge($texte){
    $color = "red";
    $maj = mb_strtoupper($texte);
    return "<p style='color:$color'>$maj</p>";
}