<?php
Class Ordinateur{
    private $_id;
    private $_marque;
   
    private $_modele;
    private $_cpuClock;
    private $_ecran;
    private $_hdd;
    private $_statut=0;
    
    
  
    public function __construct($valeurs=array()){
        if(!empty($valeurs))
            $this->hydrate($valeurs);
        
    }     
    
    public function hydrate(array $donnees){
        foreach($donnees as $attribut=>$valeur){
            $methode='set'.str_replace(' ','',ucwords(str_replace('_','',$attribut)));
            if (is_callable(array($this,$methode))){
                $this->$methode($valeur);
            }
        }

    }





    public function getMarque(){
        return $this->_marque;
    }
    public function getCpuClock(){
        return $this->_cpuClock;
    }
  
    public function setMarque($marque){
        $this->_marque=$marque;
    }
    public function setCpuClock($speed){
        $this->_cpuClock=$speed;
    }
   
   
}


    










    
