<?php
 class Patient extends Humain{
    private $_consultation;

    public function __construct($nom,$prenom){
        parent:: __construct ($nom,$prenom);
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
        return 'patient: '.$this->_prenom.' '.$this->_nom.'<br>';
    }
    public function infoPatient(){
        return $this;
    }
    public function planningPatient(){
        $result= "Consultations du  $this : ";
        foreach ($this->_consultation as $consultation){
            $result.= $consultation->getConsult()." avec le ".$consultation->getDentiste();
        }
        return $result;
    }


 }