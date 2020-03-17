<?php
    
    require_once(MANAGER_DIR."VehiculeManager.php");

    class HomeController{

        public function index(){

            $man = new VehiculeManager();

            $vehicules = $man->findAll();

            return [
                "view" => VIEW_DIR."liste.php",
                "data" => $vehicules
            ];
        }

        public function voir($id){
            
            $man = new VehiculeManager();

            $vehicule = $man->findOneById($id);

            return [
                "view" => VIEW_DIR."voir.php",
                "data" => $vehicule
            ];
        }
    }
