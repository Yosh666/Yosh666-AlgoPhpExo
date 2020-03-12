<?php
require_once('dbconnect.php');
require_once('Ordinateur.php');
require_once('OrdinateurManager.php');


$manager= new OrdinateurManager($db);
$postes=$manager->getList();

var_dump($postes);