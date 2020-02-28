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
    public function getRealisateur(){
        return $this->_realisateur;
    }
    public function getDuree(){
        return $this->_duree;
    }
    public function getSynopsis(){
        return $this->_synopsis;
    }
    public function getGenre(){
        return $this->_genre;
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
    public function dureeHeure(){
        $dureeheure= date('H:i', mktime(0,$this->_duree));
        return $dureeheure;
        //a voir comment faire la durée en heure
    }
    /*strftime( "%H H %M mn %S s", $duree * 60 )*/
    /*echo date('H:i', mktime(0, 97)); // 01:37*/

    public function infoFilm(){
        return "Le film :".$this->_titre." sorti en ".$this->_sortie. 
            " tourné par ".$this->getRealisateur()->getPrenom()." ".$this->getRealisateur()->getNom(). "
             avec un genre ".$this->getGenre()->getStyle()." pour une durée de : ".$this->dureeHeure().
             " heure et  raconte l'histoire de :".$this->_synopsis." .<br>";
    }














}