<?php
define('DS',DIRECTORY_SEPARATOR);
define('BASE_DIR',dirname(__FILE__).DS);
define('VIEW_DIR',BASE_DIR."view".DS);

require_once("controller/HomeController.php");

$ctrl=new HomeController();