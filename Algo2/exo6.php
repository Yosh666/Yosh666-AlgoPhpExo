<?php
$elements=["Monsieur","Madame","Xgluglu"];
function alimenterListeDeroulante ($elements){
    $resultat= "<select>";
    foreach ($elements as $option){
        $resultat.= "<option value= '$option'>$option</option>";//.= force à la concaténation des variables 
    }
    $resultat="</select>";
    return $resultat;
}
echo alimenterListeDeroulante($elements);
?>