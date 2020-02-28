<?php
include ('classTitulaire.php');
include ('classCompte.php');//permet de relier les différents scripts sur un seul index
//construct ($nom,$prenom,$dateNaissance,$ville
$p1=new Titulaire('Juventus','Turin','1983-02-15','Clermont');
 

// public function __construct(Titulaire $titulaire,$libelle,$soldeinitial,$devise)
$c1= new Compte($p1,'compte courant',250,'€');
echo $c1->infosDuCompte();
/*echo $c1-> crediter(20);*/
$c2= new Compte ($p1,'livret A',100,"€");
echo $c1->transferer($c2,25);
/*echo $c2->infosDuCompte();*/ 
  echo $p1-> infosDuTitulaire();