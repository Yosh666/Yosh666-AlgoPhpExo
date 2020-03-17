<?php
    /**
     * cette classe permet récuperer les infos sous forme d'objets de la base de données
     * @method index()
     * @method voir(id)
     */
    require_once("./model/managers/VehiculeManager.php");

    class HomeController{

        /**
         * Cette method permet de recupérer et afficher toutes les infos de la base de données 
         * @return dans chaque paragraphe les infos de chaque véhicule
         */
        public function index(){

            $man = new VehiculeManager();

            $vehicules = $man->findAll();

            return [
                "view" => "./view/liste.php",
                "data" => $vehicules
            ];
        }
        /**
         * cette methode permet de récupérer les données d'un seul véhicule
         * @ return lm'objet vehicul ou un message d'erreur null si inexistant
         */

        public function voir($id){
            
            $man = new VehiculeManager();

            $vehicule = $man->findOneById($id);

            return [
                "view" => "./view/voir.php",
                "data" => $vehicule
            ];
        }
    }
