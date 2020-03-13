<?php
    
    require_once("VehiculeManager.php");

    $man = new VehiculeManager();

    

    $vehicule = $man->findOneById(25);

    
    $vehicules = $man->findAll();
    var_dump($vehicules);

    echo $vehicule->getMarque()->getNom();
