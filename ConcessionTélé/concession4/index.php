<?php
    namespace App;

    use Controller\HomeController;

    define('DS', DIRECTORY_SEPARATOR); // le caractère séparateur de dossier (/ ou \)
    // meilleure portabilité sur les différents systêmes.
    define('BASE_DIR', dirname(__FILE__).DS); // pour se simplifier la vie
    define('VIEW_DIR', BASE_DIR."view/");     //le chemin où se trouvent les vues

    require("app/Autoloader.php");
    Autoloader::register();

    $ctrl = new HomeController();

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else $action = "index";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else $id = null;

    $render = $ctrl->$action($id);

    require($render['view']);
