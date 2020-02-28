<?php
class Humain{
    private $_nom;
    private $_prenom;
    private $_dateNaissance;


    public function __construct($nom,$prenom,$dateNaissance){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateNaissance=new DateTime($dateNaissance) ;
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getDateNaissance(){
        return $this->_dateNaissance;
    }
    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }
    public function setDateNaissance ($dateNaissance){
        $this->_dateNaissance=$dateNaissance;
    }

    public function getAge(){
        $now = new DateTime(); 
		$interval = $this->_dateNaissance->diff($now); 

		$age = $interval->format('%y'); 
        return $age; 
    }
    public function __toString()
    {
        return $this->_prenom.' '.$this->_nom.' '.$this->getAge()." ans";
    }

}