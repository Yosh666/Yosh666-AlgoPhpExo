<?php
$texte="Flemme de trouver une phrase";
function ConvertirenMajRouge($texte){
    $textconverti= strtoupper($texte);
    echo "<p style='color:red;' >". $textconverti."</p>";
}
ConvertirenMajRouge($texte);
?>