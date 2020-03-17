<?php

    require_once("./model/Manager.php");
    require_once("./model/entities/Marque.php");

    /**
     * cette class permet de récupérer les infos marque de la base données 
     */
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