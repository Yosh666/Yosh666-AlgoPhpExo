<?php

    require_once("Manager.php");
    require_once("Vehicule.php");

    class VehiculeManager extends Manager{

        protected $className = "Vehicule";
        protected $tableName = "vehicule";

        public function __construct(){
            parent::connect();
        }

        public function findAll(){
            $objects = parent::findAll();
            return serialize($objects);
        }
        /*
        public function findOneById($id){
            return parent::findOneById($id);
        }*/
    }