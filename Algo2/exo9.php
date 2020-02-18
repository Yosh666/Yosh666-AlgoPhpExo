<?php
$nomsRadio=['Monsieur'=>false,'Madame'=>false,'Xgluglu'=>true];
function afficherRadio($nomsRadio){
    foreach ($nomsRadio as $option => $value) {
        if($value){
            $bool= "checked";
        }
        else{
            $bool="";
        }
        switch ($option){
            case ($option==='Monsieur'):
                $sexe='Masculin';
            break;
            case ($option ==="Madame"):
                $sexe='Féminin';
            break;
            case ($option ==='Xgluglu'):
                $sexe='Autre';
            break;
            default:
                echo 'extraterrestre non autorisé';    
        }
    echo"<div>
        <input type='radio' name='".$option."' value='".$sexe."'".$bool.">
        <label>".$sexe."</label>
        </div>";       
    }
}
afficherRadio($nomsRadio);
?>