<?php
class Realisateur extends Humain{
    private $_film;
    public function __construct($nom,$prenom,$dateNaissance){
        parent::__construct($nom,$prenom,$dateNaissance);
        $this->_film=[];
    }
    public function getFilm(){
        return $this->_film;
    }
    public function addFilm(Film $film){
        array_push($this->_film,$film);
    }
    public function infosDuReal(){//on utlise le tostring de la fonction parent ça marche!
        $result= "Le réalisateur $this<br>";//on a pas encore fait le tableau pour les films voir le style pr le tableau
//mettre le tableau de film ici
        
        return $result;
    }





}