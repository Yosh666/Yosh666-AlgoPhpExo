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
function afficherInput($nomsInput){//pour parcvourir un tableau penser à foreach!

    $result= "<form> ".$nomsInput[0]."<br/><input type ='text' name='nom'><br>"//penser result plutot que echo
        .$nomsInput[1]. "<br/> <input type='text' name='prenom'><br/>"
        .$nomsInput[2]."<br/><input type='text' name='ville'><br/></form>";
    return $result;//penser a lire la doc des forms même si c'est chiant comme la pluie un lundi matin d'ailleurs on est un lundi matin pluvieux la....
echo afficherInput($nomsInput);
?>