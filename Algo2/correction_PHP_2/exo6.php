<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($elements){
    $resultat = "<form><select name='civilite'>";
    foreach($elements as $option){
        $resultat .= "<option value='$option'>$option</option>";
    }
    $resultat .= "</select></form>";
    return $resultat;
}