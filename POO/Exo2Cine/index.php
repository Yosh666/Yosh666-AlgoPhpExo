<?php
include('classHumain.php');
include('classRealisateur.php');
include('classActeur.php');
include('classGenre.php');
include('classRole.php');
include('classFilm.php');
include('classCasting.php');
$real1=new Realisateur("Juvet","Andrey",'1983-02-14');
$gore= new Genre("Horreur");
$film1= new Film('Titanic','1994',$real1,$gore,125,"Parfois dans l'eau on s'ennuie");

$film2= new Film ("Grace",'1998',$real1,$gore,257,"Et sinon tu as mal au nez toi?");
$film3= new Film ("Speed","2006",$real1,$gore,183,"Vazy Mollo Bro");
$acteur1=new Acteur ("Cruise","Thibaut",'1958-03-15');
$acteur2=new Acteur ("Pitt","Jessica","2000-08-02");
$role1= New Role("Valentin");
$role2=New Role ("Brody");
$casting1= New Casting ($film1,$acteur1,$role1);
$casting2=New Casting ($film2,$acteur2,$role2);
$casting3=New Casting ($film3,$acteur1,$role2);


echo $film2->infoFilm();
echo $real1->infosDuReal();
echo $gore->infoGenre();
//echo $film2->dureeHeure();
echo $acteur2->infoActeur();
echo $role2->infoRole();