<?php
$nomsInput=["Nom","Prenom","Ville"];
/* <form action="cible.php" method="post">
Nom:
<input type="text" name="firstname" >
<br>
Âme:
<input type="text" name="lastname">
<br>
Nature: <input type="text" name="soul" placeholder="Neutre Chaotique">
<input type="submit" id="bouton" value="Valider">
</form> */
function afficherInput($nomsInput){
    echo "<form> ".$nomsInput[0]."<br/><input type ='text' name='nom'><br>"
        .$nomsInput[1]. "<br/> <input type='text' name='prenom'><br/>"
        .$nomsInput[2]."<br/><input type='text' name='ville'><br/></form>";

}
afficherInput($nomsInput);
?>