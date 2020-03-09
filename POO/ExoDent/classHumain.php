<?php
class Humain{
    protected $_nom;
    protected $_prenom;

    public function __construct($nom,$prenom){
        $this->_nom=$nom;
        $this->_prenom=$prenom;   
    }
    
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }

    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }

    public function __toString(){
        return $this->_prenom." ".strtoupper($this->_nom);
    }

}