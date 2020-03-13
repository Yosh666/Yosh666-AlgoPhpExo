<?php

    require_once("Manager.php");
    require_once("Marque.php");

    class MarqueManager extends Manager{

        protected $className = "Marque";
        protected $tableName = "marque";

        public function __construct(){
            parent::connect();
        }

        /*public function findAll(){
            return parent::findAll();
        }

        public function findOneById($id){
            return parent::findOneById($id);
        }*/
    }