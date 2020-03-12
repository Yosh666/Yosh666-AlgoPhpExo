<?php
Class OrdinateurManager{
    private $_db;//l'objet PDo créé dans le fichier dbconnect.php

    public function __construct($db){
        $this->setDb($db);
    }
    public function getList(){
        $postes=[];
        $q=$this->_db->query('SELECT id_ordinateur,marque_ordinateur,modele_ordinateur
                            FROM ordinateur
                            ORDER BY marque_ordinateur');
        while ($data=$q->fetch()){
            $postes[]=new Ordinateur($data);
        }
        return $postes;

    }

    public function setDb(PDO $db){
        $this->_db=$db;
    }




}