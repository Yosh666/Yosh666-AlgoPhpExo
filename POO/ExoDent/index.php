<?php
include("classHumain.php");
include('classDentiste.php');
include('classPatient.php');
$dr1= new Dentiste ("Janvier","Juliette");
echo $dr1-> infoDentiste();