<?php
    require_once "./model/Entity.php";
    /**
     * class permettant de retourner les infos de la marque sous forme d'une tableau
     * @method __toString @return nom
     * @method getId()
     * @method getNom()
     * @method getOrigine()
     * @method setId()
     * @method setNom()
     * @method setOrigine()
     * 
     */
    final class Marque extends Entity{

        private $id;
        private $nom;
        private $origine;

        public function __construct($data){         
            $this->hydrate($data);        
        }

        /** 
         * Get the value of id
         */ 
        public function getId()
        {
            return $this->id;
        }

        protected function setId($id){

            $this->id = $id;

            return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = strtoupper($nom);

                return $this;
        }
        
        /**
         * Get the value of origine
         */ 
        public function getOrigine()
        {
                return $this->origine;
        }

        /**
         * Set the value of origine
         *
         * @return  self
         */ 
        public function setOrigine($origine)
        {
                $this->origine = $origine;

                return $this;
        }

        public function __toString(){

            return $this->nom;
        }

    }
