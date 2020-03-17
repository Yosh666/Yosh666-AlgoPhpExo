<?php

    abstract class Entity{

        protected function hydrate($data){

            foreach($data as $field => $value){

                //field = marque_id
                //fieldarray = ['marque','id']
                $fieldArray = explode("_", $field);

                if(isset($fieldArray[1]) && $fieldArray[1] == "id"){
                    $manName = ucfirst($fieldArray[0])."Manager";
                    require_once(MANAGER_DIR.$manName.".php");
                    $man = new $manName();
                    $value = $man->findOneById($value);
                }
                
                $method = "set".ucfirst($fieldArray[0]);
                if(method_exists($this, $method)){
                    $this->$method($value);
                }

            }
        }

        public function getClass(){
            return get_class($this);
        }
    }