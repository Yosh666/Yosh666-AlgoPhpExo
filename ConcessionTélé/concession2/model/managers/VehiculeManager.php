<?php
    require_once("./model/Manager.php");
    require_once("./model/entities/Vehicule.php");
    /**
     * cette class permet de récupérer les infos véhicule de la base données 
     */

    class VehiculeManager extends Manager{

        protected $className = "Vehicule";
        protected $tableName = "vehicule";

        public function __construct(){
            parent::connect();
        }
        /*
        public function findAll(){
            return parent::findAll();
        }
        
        public function findOneById($id){
            return parent::findOneById($id);
        }*/
    }