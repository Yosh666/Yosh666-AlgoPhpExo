<?php
/**
 * Classe abstraite parent de Marque et Vehicule 
 * @property Entity va servir à hydrater les objets marque et véhicule en extends
 * @method hydrate($data) sert à hydrater les objets
 * @method getClass()permet de cibler quel objet hydrater
 * 
 * 
 */
    abstract class Entity{
        /**
         * Cette methode permet d'hydrater les objets($data)
         */
        protected function hydrate($data){

            foreach($data as $field => $value){

                //field = marque_id
                //fieldarray = ['marque','id']
                $fieldArray = explode("_", $field);

                if(isset($fieldArray[1]) && $fieldArray[1] == "id"){
                    $manName = ucfirst($fieldArray[0])."Manager";
                    require_once("./model/managers/".$manName.".php");
                    $man = new $manName();
                    $value = $man->findOneById($value);
                }
                
                $method = "set".ucfirst($fieldArray[0]);
                if(method_exists($this, $method)){
                    $this->$method($value);
                }

            }
        }
        /**
         * @get the class enfants
         * @return get_class($this)
         */
        public function getClass(){
            return get_class($this);
        }
    }