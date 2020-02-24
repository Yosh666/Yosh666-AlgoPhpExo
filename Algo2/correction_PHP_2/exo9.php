<?php

$elements = ["Masculin", "Féminin", "Autre"];
echo afficherRadio($elements);

function afficherRadio($elements){
    $resultat = "<form>";
    foreach ($elements as $radio) {
        $resultat .= "<input type='radio' name='sexe'>$radio<br>";
    }
    $resultat .= "</form>";
    return $resultat;
}