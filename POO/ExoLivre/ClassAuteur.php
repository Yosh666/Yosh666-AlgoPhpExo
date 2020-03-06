<?php
 /* Un auteur est identifié par un nom et un prénom.*/
 class Auteur{
     private $_nom;
     private $_prenom;
     private $_livre;
    // private $_bibliographie;

    public function __construct($nom,$prenom){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        //$this->_bibliographie=[];
        $this->_livre=[];
                
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    } 
    public function getLivre(){
        return $this->_livre;
    } 
    
    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }

   /* public function addBiblio(Bibliographie $bibliographie){
        array_push($this->_bibliographie,$bibliographie);
    }*/
    public function addLivre(Livre $livre){
        array_push($this->_livre,$livre);
    }

    public function __toString()
    {
        return"L'auteur ".$this->_prenom.' '.$this->_nom.' ';
    }
    
    public function infoAuteur(){
        return $this;
    }
    public function afficherBiblio(){
        $result= "$this a écrit :<br>";
        foreach ($this->_livre as $livre){
            $result.=$livre->getTitre().' ( '
            .$livre->getParution().') : '
            .$livre->getNbPage().' pages /'
            .$livre->getPrix(). '€ <br>';
        }
        return $result;  
   
    }

 }