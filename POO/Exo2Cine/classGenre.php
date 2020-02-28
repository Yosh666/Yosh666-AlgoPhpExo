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
          
    





}