<?php
    define('BASE_DIR', dirname(__FILE__));
    define('CTRL_DIR', BASE_DIR."/controller/");
    define('VIEW_DIR', BASE_DIR."/view/");
    define('MODEL_DIR', BASE_DIR."/model/");
    define('MANAGER_DIR', MODEL_DIR."/managers/");
    define('ENTITY_DIR', MODEL_DIR."/entities/");

    require_once(CTRL_DIR."HomeController.php");

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
