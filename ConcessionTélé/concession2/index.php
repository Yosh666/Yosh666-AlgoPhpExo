<?php

    require_once("./controller/HomeController.php");

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
