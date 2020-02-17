<?php
$capitales=['France'=>'Paris','Allemagne'=>'Berlin','Usa'=>'Washington','Italie'=>'Rome'];
function afficherTableHTML($capitales){
    $capitales=array_change_key_case($capitales, CASE_UPPER);
    ksort($capitales);
     echo"<table style='border:1px solid black;'><thead><tr><th>Pays</th><th>Ville</th><th>Lienwiki</th></tr></thead><tbody>";
    foreach ($capitales as $pays => $ville) {
        echo "<tr><td style='border:1px solid black;'>".$pays."</td>
        <td style='border:1px solid black;'>" .$ville."</td>
        <td style='border:1px solid black;'><a href='https://fr.wikipedia.org/wiki/".$ville." ' target=_blank>Lien<a/></td></tr>";       
    }
    echo"</tbody></table>";
}
afficherTableHTML($capitales);
?>
