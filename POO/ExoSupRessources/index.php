<?php
include("Ordinateur.php");
//l'objet est instancié avec un processeur de 2.4 GHz et on y installe un petit disque du
$poste= new Ordinateur("Samsung",2.4);
$poste->setHdd(Ordinateur::HDD_SMALL);
echo "Le disque dur est d'une capacité de ".$poste->getHdd();