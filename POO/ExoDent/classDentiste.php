<?php

class Dentiste extends Humain{
    private $_consultation;

    public function __construct($nom,$prenom){
        parent::__construct($nom,$prenom);
        $this->_consultation=[];
    }
    /*public function addConsultation(Patient $patient){
        array_push($this->_consultation,$patient);
    }*/
    public function getConsult(){
        return $this->_consultation;
    }
    public function __toString()
    {
        return 'Dr '.$this->_prenom.' '.strtoupper($this->_nom);
    }
    public function infoDentiste(){
        return $this;
    }






}