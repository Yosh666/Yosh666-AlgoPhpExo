<?php
/*Film : titre film, 
année de sortie, 
réalisateur (1 seul réalisateur par film)
genre
durée (en min),qui doit passer en format heure!
synopsis, 
*/
class Film{
    private $_titre;
    private $_sortie;
    private $_realisateur;
    private $_genre;
    private $_duree;
    private $_synopsis;
    
    
    public function __construct($titre,$sortie,Realisateur $realisateur, Genre $genre,$duree,$synopsis){
        $this->_titre=$titre;
        $this->_sortie=$sortie;
        $this->_realisateur=$realisateur;
        $this->_genre=$genre;
        $this->_duree=$duree;
        $this->_synopsis=$synopsis;

        $realisateur->addFilm($this);
        $genre->addFilm($this);
    } 
    public function getTitre(){
        return  $this->_titre;
    }
    public function getSortie(){
        return $this->_sortie;
    }
    public function getDuree(){
        return $this->_duree;
    }
    public function getSynopsis(){
        return $this->_synopsis;
    }

    public function setTitre($titre){
        $this->_titre=$titre;
    }
    public function setSortie($sortie){
        $this->_sortie=$sortie;
    }
    public function setDuree($duree){
        $this->_duree=$duree;
    }
    public function setSynopsis($synopsis){
        $this->_synopsis=$synopsis;
    }
    public function dureeHeure($duree){
        //a voir comment faire la durée en heure
    }
    
















}