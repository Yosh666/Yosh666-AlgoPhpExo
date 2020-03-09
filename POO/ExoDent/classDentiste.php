<?php

class Dentiste extends Humain{
    private $_consultation;

    public function __construct($nom,$prenom){
        parent::__construct($nom,$prenom);
        $this->_consultation=[];
    }
    public function addConsultation(Consultation $consultation){
        array_push($this->_consultation,$consultation);
    }
    public function getConsult(){
        return $this->_consultation;
    }
    public function __toString()
    {
        return 'Dr '.$this->_prenom.' '.strtoupper($this->_nom).'<br>';
    }
    public function infoDentiste(){
        return $this;
    }
    public function planningDentiste(){
        $result= "Consultations du  $this : ";
        foreach ($this->_consultation as $consultation){
            $result.= $consultation->getConsult()." avec le ".$consultation->getPatient();
        }
        return $result;
    }






}