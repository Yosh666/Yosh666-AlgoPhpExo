<?php
include("classHumain.php");
include('classDentiste.php');
include('classPatient.php');
include('classConsultation.php');
$dr1= new Dentiste ("Janvier","Juliette");
$p1= new Patient ("Greg","Ploum");
$p2= new Patient ("Virgil","Franie");
$dr2=new Dentiste ("Vrac","Vlad");
echo $dr1-> infoDentiste();
echo $p1->infoPatient();
$con= new Consultation($p1,$dr1,'2019-05-23',"09:05");
$con2=new Consultation($p1,$dr2, '2020-03-12',"08:15");
echo $dr1->planningDentiste();
echo $p1->planningPatient();