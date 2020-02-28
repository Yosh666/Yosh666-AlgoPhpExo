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
        $result= "Le réalisateur $this a fait les films: <br>";//on a pas encore fait le tableau pour les films voir le style pr le tableau
//mettre le tableau de film ici
        $result.="<table style='border: 1px solid black' ><tr>
        <th>Titre</th>
        <th>Date de Sortie</th>
        <th> Genre </th>
        <th> Durée</th>
        <th>Synopsis</th></tr>";
        foreach ($this->_film as $film){
        $result .="<tr><td style='border: 1px solid black'>".$film->getTitre()."</td>
                <td style='border: 1px solid black'>".$film->getSortie()."</td>
                <td style='border: 1px solid black'>".$film->getGenre()->getStyle()."</td>
                <td style='border: 1px solid black'>".$film->dureeHeure()." heure </td>
                <td style='border: 1px solid black'>".$film->getSynopsis()."</td></tr>";                    
        }
        $result .="</table><br>";
        
        return $result;
    }





}