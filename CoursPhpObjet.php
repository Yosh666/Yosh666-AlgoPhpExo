<?php
    class Personne{
        //une classe est toujours en majuscule
// propriétés ou attributs
        private $_nom;
        private $_prenom;
        private $_dateNaissance;
        // toujours mettre les attributs en private
//constructeur
        public function __construct($Nom,$Prenom,$DateNaissance){
            //public car on va devoir l'utiliser en dehors de la class pour entrer les données de l'objet
            // __ toujours 2 underscores devant construct
            // dans construct on utilise les variables pas private mais celle qu'on utlisera en public pr entrer les données
            $this->_nom=$Nom;
            $this->_prenom=$Prenom;
            $this->_dateNaissance=new DateTime($DateNaissance);
        //$this veut dire cetter variable dans l'objet ça target le private en gros
        }
// Getters (accesseurs)
        public function getNom(){
            return $this->_nom;
        }
        public function getPrenom(){
            return $this->_prenom;
        }
        public function getDateNaissance(){
            return $this->_dateNaissance;
        }
        // permet de récupérer et stocker la variable de l'objet
// Setters (mutateurs)
        public function setNom($Nom){
            $this->_nom=$Nom;
        }
        public function setPrenom($Prenom){
            $this->_prenom=$Prenom;
        }
        public function setDateNaissance($DateNaissance){
            $this->_dateNaissance=$DateNaissance;
        }
        // set permet de changer la valeur d'une variable dans un objet
// renvoie d'une  chaîne
        public function __toString(){
            /*return $this->_nom." ".$this->_prenom. " est né le: ".$this->_dateNaissance;
            => ça ne peut plus marcher car on a instancié un objet date dans $date de naissance*/
         return $this->_nom. " ".$this->_prenom." a ".$this->getAge()." ans";
        
        }
        public function getAge(){
            $now=new DateTime();
            $interval= $this->_dateNaissance->diff($now);
            return $interval->format('%y');

        }
    }
    $p1= new Personne("Cauvin", "Audrey","1985-07-05");
    //new permet d'instancier l'objet et donc l'ensemble de fonctions compris dedans
    echo $p1;
    //on va changer le prénom et sauter une ligne
    $p1->setPrenom("Isabelle");
