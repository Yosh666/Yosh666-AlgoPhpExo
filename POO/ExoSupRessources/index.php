<?php
include("Ordinateur.php");
//l'objet est instancié avec un processeur de 2.4 GHz et on y installe un petit disque du
$poste= new Ordinateur(array("Samsung",2.4));
$poste2=new Ordinateur(array("Hitachi",1.6));
$poste->setHdd(Ordinateur::HDD_SMALL);
echo "Le disque dur est d'une capacité de ".$poste->getHdd()."<br>";
Ordinateur::combienPoste();