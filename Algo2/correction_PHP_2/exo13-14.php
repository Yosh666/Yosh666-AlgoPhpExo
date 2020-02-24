<?php

class Voiture{

    // Attributs
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_etat; // démarrée ou stoppée

    // Constructeur
    public function __construct($marque, $modele, $nbPortes){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_etat = false;
    }

    // Getters et méthodes supplémentaires
    public function getMarque(){
        return $this->_marque;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function getNbPortes(){
        return $this->_nbPortes;
    }

    public function getEtat(){
        if($this->_etat){
            return "démarré";
        }else{
            return "stoppé";
        }
    }

    public function __toString(){
        return "Le véhicule ".$this->_marque." ".$this->_modele;
    }

    public function getInfos(){
        return "Nom et modèle : $this->_marque $this->_modele<br>
                Nombre de portes : $this->_nbPortes<br>
                $this est ".$this->getEtat()."<br>
                Sa vitesse actuelle est de : $this->_vitesseActuelle km/h<br>";
    }

    public function demarrer(){
        if($this->_etat){ // si état = vrai
            echo "$this est déjà démarré !<br>";
        }else{
            $this->_etat = true;
            echo "$this démarre<br>";
        }
    }

    public function stopper(){
        if(!$this->_etat){ // si état = false
            echo "$this est déjà à l'arrêt !<br>";
        }else{
            $this->_etat = false;
            $this->_vitesseActuelle = 0;
            echo "$this s'arrête<br>";
        }
    }

    public function accelerer($vitesse){
        if($this->_etat){
            $this->_vitesseActuelle += $vitesse;  //$this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse
            echo "$this accélère de $vitesse km/h<br>";
            echo "La vitesse actuelle est de $this->_vitesseActuelle<br>";
        }else{
            echo "<p style='color:red'>Pour accélérer, $this doit être démarré !</p>";
        }
    }

    public function ralentir($vitesse){
        if($this->_etat){
            $this->_vitesseActuelle = max($this->_vitesseActuelle - $vitesse, 0);
            echo "$this ralentit de $vitesse km/h<br>";
            echo "La vitesse actuelle est de $this->_vitesseActuelle<br>";
            //$this->_vitesseActuelle -= $vitesse;  //$this->_vitesseActuelle = $this->_vitesseActuelle - $vitesse
        }else{
            echo "<p style='color:red'>Pour ralentir, $this doit être démarré !</p>";
        }
    }
}

class VoitureElec extends Voiture{  // VoitureElec hérite (étend = extends) de la classe Voiture

    // Attributs
    private $_autonomie;

    // Constructeur (parent:: permet d'hériter du constructeur de la classe mère "Voiture")
    public function __construct($marque, $modele, $nbPortes, $autonomie){
        parent::__construct($marque, $modele, $nbPortes); 
        $this->_autonomie = $autonomie;
    }

    // Getters
    public function getAutonomie(){
        return $this->_autonomie;
    }

    public function getInfos(){
        return parent::getInfos(). " Autonomie : $this->_autonomie<br>";
    }
}

$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);
$ve1 = new VoitureElec("BMW","i3",5,200);

$v1->demarrer();
$v1->accelerer(50);
$v1->stopper();
echo $v1->getInfos();

$v2->accelerer(50); // ERREUR !

$ve1->demarrer();
$ve1->accelerer(20);
echo $ve1->getInfos();


