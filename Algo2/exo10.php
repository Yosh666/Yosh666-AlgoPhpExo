<?php
$coordonnees=["Nom","Prenom","Email","Ville"];
echo "<form> "
.$coordonnees[0]."<br/><input type ='text' name='nom'><br>"
.$coordonnees[1]. "<br/> <input type='text' name='prenom'><br/>"
.$coordonnees[2]."<br><input type='text' name= 'prenom'><br>"
.$coordonnees[3]."<br/><input type='text' name='ville'><br/>";

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
$elements=["Developpeur Logiciel","Designer Web","Intégrateur","Chef de projet"];
function alimenterListeDeroulante ($elements){
    echo "Liste de choix <br><select>";
    foreach ($elements as $option){
        echo "<option >".$option. "</option>";
    }
    echo "</select>";
}
alimenterListeDeroulante($elements);
echo "<br><input type='submit' value='Submit'>
</form>";
?>