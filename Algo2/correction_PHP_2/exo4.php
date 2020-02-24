<?php

$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){
    asort($capitales);
    $resultat = "<table border=1><thead><tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr><tbody>";
    foreach($capitales as $pays => $capitale){
        $resultat .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                        <td><a href='https://fr.wikipedia.org/wiki/$capitale'>Lien</a></td>
                    </tr>";
    }
    $resultat .= "</tbody></table>";
    return $resultat;
}