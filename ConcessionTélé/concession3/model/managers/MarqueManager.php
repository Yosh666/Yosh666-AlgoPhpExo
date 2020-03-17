<?php

    require_once(MODEL_DIR."Manager.php");
    require_once(ENTITY_DIR."Marque.php");

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