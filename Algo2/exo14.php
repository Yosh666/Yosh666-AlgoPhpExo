<?php
class Voiture{
    private $_marque;
    private $_modele;
    public function __construct($Marque,$Modele){
        $this->_marque=$Marque;
        $this->_modele=$Modele;
    }
    
    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function setMarque($Marque){
        $this->_marque=$Marque;
    }
    public function setModele($Modele){
        $this->_modele=$Modele;
    }
    public function getInfos(){
        return $this->_marque." ".$this->_modele;
    }
    
}
$v1= new Voiture('Peugeot','406');
echo $v1-> getInfos()."<br>";

class VoitureElec extends Voiture{
    private $_autonomie;
    public function __construct($Marque,$Modele,$Autonomie){
        parent::__construct($Marque,$Modele);
        $this->_autonomie=$Autonomie;
    }
    public function getAutonomie(){
        return $this->_autonomie;
    }
    public function setAutonomie($Autonomie){
        $this->_autonomie=$Autonomie;
    }
    public function getInfos(){
        return $this->getMarque()." ".$this-> getModele()." ".$this->_autonomie;
    }
}
$v2= new VoitureElec("Bmw","I3",100);
echo $v2-> getInfos()."<br>";
?>