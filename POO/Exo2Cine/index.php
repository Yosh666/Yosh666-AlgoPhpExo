<?php
include('classHumain.php');
include('classRealisateur.php');
include('classActeur.php');
include('classGenre.php');
include('classRole.php');
include('classFilm.php');
include ('classCasting.php');
$real1=new Realisateur("Juvet","Andrey",'1983-02-14');
$gore= new Genre("Horreur");
$film1= new Film('Titanic','1994',$real1,$gore,125,"Parfois dans l'eau on s'ennuie");
/*
echo $real1->infosDuReal();*/
$film2= new Film ("Grace",'1998',$real1,$gore,257,"Et sinon tu as mal au nez toi?");
$film3= new Film ("Speed","2006",$real1,$gore,183,"Vazy Mollo Bro");
echo $film2->infoFilm();
echo $real1->infosDuReal();
echo $gore->infoGenre();
//echo $film2->dureeHeure();