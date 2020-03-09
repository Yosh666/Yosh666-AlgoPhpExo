<?php

class Consultation{

    private $_date;
    private $_heure;
    private $_dentiste;
    private $_patient;

    public function __construct(Patient $patient, Dentiste $dentiste, $date,$heure){
        $this->_date=$date;
        $this->_heure=$heure;
        $this->_dentiste=$dentiste;
        $this->_patient=$patient;
        $patient->addConsultation($this);
        $dentiste->addConsultation($this);
    }
    public function formaterDate(){
            $formdate= strftime('%d/ %m/ %Y', strtotime($this->_date));
            return $formdate;
        }
    public function getConsult(){      
        
        $formdate= strftime('%d/ %m/ %Y', strtotime($this->_date));        
        $result = 'Le '.$formdate.' à ' .$this->_heure;     
        return $result;

    }   
    public function getPatient(){
        return $this->_patient;
    }
    public function getDentiste(){
        return $this->_dentiste;
    }
}