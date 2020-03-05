<?php
 /* Un auteur est identifié par un nom et un prénom.*/
 class Auteur{
     private $_nom;
     private $_prenom;
     private $_livre;
     private $_bibliographie;

    public function __construct($nom,$prenom, Livre $livre){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_livre=[];
        
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

    public function addLIvre(Livre $livre){
        array_push($this->_livre,$livre);
    }

    public function __toString()
    {
        return"L'auteur ".$this->_prenom.' '.$this->_nom.' ';
    }
    



    
  


 }