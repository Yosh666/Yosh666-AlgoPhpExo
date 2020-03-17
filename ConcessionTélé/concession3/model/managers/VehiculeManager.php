<?php
    require_once(MODEL_DIR."Manager.php");
    require_once(ENTITY_DIR."Vehicule.php");

    class VehiculeManager extends Manager{

        protected $className = "Vehicule";
        protected $tableName = "vehicule";

        public function __construct(){
            parent::connect();
        }

        public function findAll(){
            return parent::findAll();
        }
        /*
        public function findOneById($id){
            return parent::findOneById($id);
        }*/
    }