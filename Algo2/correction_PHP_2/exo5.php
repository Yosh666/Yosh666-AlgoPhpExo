<?php

$nomsInput = ["Nom","Prénom","Ville"];
echo afficherInput($nomsInput);

function afficherInput($nomsInput){
    $resultat = "<form>";
    foreach($nomsInput as $input){
        $resultat .= "<label>$input</label><br/><input type='text' name='".mb_strtolower($input)."'><br/>";
    }
    $resultat .= "</form>";
    return $resultat;
}