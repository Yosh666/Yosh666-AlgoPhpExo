<?php
include('classHumain.php');
include('classRealisateur.php');
include('classActeur.php');
include('classGenre.php');
include('classRole.php');
include('classFilm.php');
$real1=new Realisateur("Juvet","Andrey",'1983-02-14');
echo $real1->infosDuReal();