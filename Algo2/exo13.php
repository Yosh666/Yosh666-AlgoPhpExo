<?php
class Voiture{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_etat;
    
/* public function getNom(){
            return $this->_nom;
        }*/
    public function __construct($Marque,$Modele,$NbPortes){
        $this->_marque=$Marque;
        $this->_modele=$Modele;
        $this->_nbPortes=$NbPortes;
        $this->_vitesseActuelle=0;
        $this->_etat=false;
     

    }
    public function getMarque(){
        return $this->_marque;
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getNbPortes(){
        return $this->_nbPortes;
    }
    public function getVitesseActuelle(){
        return $this->_vitesseActuelle;
    }
    public function getEtat(){
        return $this->_etat;
    }
  
    public function setMarque($Marque){
        $this->_marque=$Marque;
    }
    public function setModele($Modele){
        $this->_modele=$Modele;
    }
    public function setNbPortes($NbPortes){
        $this->_nbPortes=$NbPortes;
    }
    public function setVitesseActuelle($VitesseActuelle){
        $this->_vitesseActuelle=$VitesseActuelle;
    }
    public function setEtat($Etat){
        $this->_etat=$Etat;
    }

    public function __toString(){
        return "véhicule ".$this->_marque." ".$this->_modele;
        
    }
    public function demarrer(){
        if ($this->_etat){
            echo "le $this est déja démarré bourrinus<br>";//corrigé en tostring
        }
        else{
            $this->_etat=true;
            echo "Le $this démarre<br>";
        }
    }
    public function stopper(){
        if ($this->_etat){
            $this->_etat=false;
            $this->_vitesseActuelle=0;
            echo "Le $this est stoppé<br>";//corriger en tostring
        }
        else{
            echo "Le $this est déja éteinte bourrinus<br>";
        }
    }
    public function accelerer($Acceleration){
        if ($this->_etat && $Acceleration>0){
            $this->_vitesseActuelle += $Acceleration;
            echo "Le $this accélere de: $Acceleration km/h<br>
            La vitesse du $this est de: ".$this->_vitesseActuelle." km/h <br>";
        }
        elseif ($this->_etat && $Acceleration==0){
            echo "Faut appuyer sur le champignon hein<br>";
        }
        else{
            echo "Le $this veut accélerer de $Acceleration km/h<br>
            Pour accélérer, il faut démarrer le $this<br>";
        }

        
    }
    public function ralentir($Deceleration){
        if ($this->_etat&& $this->_vitesseActuelle>=$Deceleration){
            $this->_vitesseActuelle-=$Deceleration;
            echo "Le $this ralenti de : $Deceleration km/h<br>
            La vitesse du $this est de : ".$this->_vitesseActuelle." km/h<br>";
        }
        else if  ($this->_etat && $this->_vitesseActuelle<$Deceleration){
            echo "Commande impossible bourrinus<br>";
            $this->_vitesseActuelle=0;
            echo "La vitesse du  $this  est de: ".$this->_vitesseActuelle." km/h<br>";
        }
        else {
            echo "Pour ralentir faudrait déja que la voiture roule <br>";
        }
    }

    public function infos(){
        echo "<br> InFormation du véhicule <br>
            *****************<br>
            Nom et modéle du véhicule: ".$this->_marque." ".$this->_modele. "<br>
            Nombre de portes : ".$this->_nbPortes. "<br>";
            if ($this->_etat){
                echo "Le $this est démarré<br>";
            }
            else {
                echo "Le $this est stoppé <br>";
            }
        echo "Sa vitesse actuelle est de ".$this->_vitesseActuelle." km/h<br>";

    }

}
/*construct($Marque,$Modele,$NbPortes)<-ce sont les infos nécesserais a une instanciation!*/
$v1=new Voiture('Peugeot','408',5);
$v2=new Voiture('Citroën','C4',3);
$v1->infos();
$v2->infos();

//fonction demarrer ;stopper;accelerer;ralentir
$v1->demarrer();
$v1->accelerer (50);
$v2->stopper();
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
$v1->ralentir(20);
$v1->ralentir(60);

?>