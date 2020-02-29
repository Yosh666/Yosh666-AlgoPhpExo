<?php
class Genre{
    private $_style;
    private $_film;

    public function __construct($style){
        $this->_style=$style;
        $this->_film=[];
    }
    public function getStyle(){
        return  $this->_style;
    }
    /*public function getFilm(){
        return $this->_film; Cette fonction n'est pas possible le film est un objet a remplir tout seul
    }*/
    public function setStyle($style){
        $this->_style=$style;
    }
    public function addFilm(Film $film){
        array_push($this->_film,$film);
    }
    /*($titre,$sortie,Realisateur $realisateur, Genre $genre,$duree,$synopsis)*/
    public function infoGenre(){
        $result= "Le genre ".$this->_style. " se retrouve dans les films:<br>";
        $result.="<table style='border: 1px solid black'><tr>
            <th>Titre</th>
            <th>Date de Sortie</th>
            <th> Réalisateur </th>
            <th> Durée</th>
            <th>Synopsis</th></tr>";
        foreach ($this->_film as $film){
            $result .="<tr ><td style='border: 1px solid black'>".$film->getTitre()."</td>
                    <td style='border: 1px solid black'>".$film->getSortie()."</td>
                    <td style='border: 1px solid black'>".$film->getRealisateur()->getPrenom()." ".$film->getRealisateur()->getNom()."</td>
                    <td style='border: 1px solid black'>".$film->dureeHeure()." heure </td>
                    <td style='border: 1px solid black'>".$film->getSynopsis()."</td></tr>";                    
        }
        $result .="</table><br>";
        return $result;     
    }
          
    





}