<?php
$texte="Flemme de trouver une phrase";
function ConvertirenMajRouge($texte){
    $textconverti= strtoupper($texte);//mb_strtoupper était possible aussi et respecte les accents à passer en majuscule à privilégier!
    echo "<p style='color:red;' >". $textconverti."</p>";
}
ConvertirenMajRouge($texte);
?>