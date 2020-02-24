<?php

// checked

$elements = ["Choix 1" => "", "Choix 2" => "checked", "Choix 3" => ""];
echo genererCheckbox($elements);

function genererCheckbox($elements){
    $resultat = "<form>";
    foreach ($elements as $label => $checked) {
        $resultat .= "<input type='checkbox' $checked>$label<br>";
    }
    $resultat .= "</form>";
    return $resultat;
}