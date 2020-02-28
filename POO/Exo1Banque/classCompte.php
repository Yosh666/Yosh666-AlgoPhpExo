<?php
class Compte{
    private $_libelle;
    private $_soldeinitial;
    private $_devise;
    private $_titulaire;
    

        public function __construct(Titulaire $titulaire,$libelle,$soldeinitial,$devise){
            $this->_titulaire=$titulaire;
            $this->_libelle=$libelle;
            $this->_soldeinitial= $soldeinitial;
            $this->_devise = $devise;
            $titulaire->addCompte($this);
        }
        public function getLibelle(){
            return $this->_libelle;
        }
        public function getSoldeInitial(){
            return $this->_soldeinitial;
        }
        public function getDevise(){
            return $this->_devise;
        }

        public function setTitulaire($titulaire){
            $this->_titulaire=$titulaire;
        }
        public function setLibelle($libelle){
            $this->_libelle=$libelle;
        }
        public function setSoldeInitial($soldeinitial){
            $this->_soldeinitial= $soldeinitial;
        }
        public function setDevise($devise){
            $this->_devise = $devise;
        }
        
        public function infosDuCompte(){
            return $this->_titulaire->infosDuTitulaire()." <br>"
                .$this->_libelle."<br>"
                .$this->_soldeinitial."<br>"
                .$this->_devise."<br>";
        }
        public function crediter($montant){
            $this->_soldeinitial+= $montant;
            return "Vous avez crédité votre  $this->_libelle de $montant $this->_devise 
                Votre solde est de: $this->_soldeinitial $this->_devise<br>";
        }
        public function debiter($montant){
            $this->_soldeinitial-=$montant;
            return "Vous avez débité votre  $this->_libelle de $montant $this->_devise 
                Votre solde est de: $this->_soldeinitial $this->_devise<br>";
        }
        public function transferer(Compte $compte,$montant){
            $this->debiter($montant);
            echo $compte->crediter($montant);
            return "vous avez fait un transfert de $montant $this->_devise 
                votre  $this->_libelle est à un solde de : $this->_soldeinitial.<br>";
                

        }
        //créer une fonction récoltant les infos pour la classe titulaire!
}