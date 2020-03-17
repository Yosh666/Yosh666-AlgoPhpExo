<?php

    require_once("./model/DAO.php");
    /**
     * classe abstraite parent de VehiculeManager et MarqueManager 
     *@property Manager va  récupérer les infos dans la base de données
     * @method findAll()     * 
     * @method findOneById($id)
     * @method add($data)
     * 
     * 
     */

    abstract class Manager{

        protected function connect(){
            DAO::connect();
        }
        /**
         * cette méthode permet de récupérer toute les infos de l'application
         * @return tout les elements de la table sous forme d'objets vehicule ou marque
         */
        public function findAll(){

            $sql = "SELECT *
                    FROM ".$this->tableName." a
                    ";

            return $this->getMultipleResults(
                DAO::select($sql), 
                $this->className
            );
        }

        /**
         * cette méthode permet de récupérer un seul ou aucun résultat
         * @return un resultat la ligne de la table sous la forme d'un objet marque ou vehicule
         * @return 0 resultat par un message false
         *
         */
        public function findOneById($id){

            $sql = "SELECT *
                    FROM ".$this->tableName." a
                    WHERE a.id_".$this->tableName." = :id
                    ";

            return $this->getOneOrNullResult(
                DAO::select($sql, ['id' => $id], false), 
                $this->className
            );
        }

        /**
         * cette méthode permet d'insérer de nouvelles données dans la base
         * @return statement execute() ou message d'erreur
         */
        public function add($data){
            $keys = array_keys($data);
            $values = array_values($data);
            $sql = "INSERT INTO ".$this->tableName."
                    (".implode(',', $keys).")
                    VALUES
                    ('".implode("','",$values)."')";

                    
            var_dump($sql);
            return DAO::insert($sql);
        }
        
        protected function getMultipleResults($rows, $class){

            $objects = [];

            foreach($rows as $row){
                $objects[] = new $class($row);
            }

            return $objects;
        }

        protected function getOneOrNullResult($row, $class){

            if($row != null){
                return new $class($row);
            }
            return false;
        }

    }