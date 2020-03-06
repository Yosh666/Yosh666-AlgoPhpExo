<?php
include ('ClassAuteur.php');
include ('ClassLivre.php');

$auteur1= new Auteur ('King','Stephen');
echo $auteur1->infoAuteur();
echo "<br>";
$livre1= new Livre("mange-moi","1965",'1543','35',$auteur1);
echo $livre1->infoLivre();
$livre2= new Livre("barre-toi",1984,321,17,$auteur1);
echo $auteur1->afficherBiblio();