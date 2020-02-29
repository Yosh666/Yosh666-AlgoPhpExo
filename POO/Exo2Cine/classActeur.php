<?php
class Acteur extends Humain{
    private $_casting;
    public function __construct($nom,$prenom,$dateNaissance){//en attente faire relation film realisateur et genre d'abord
        parent::__construct($nom,$prenom,$dateNaissance);
        
        $this->_casting=[];

    }
    public function getCasting(){
        return $this->_casting;
    }

    public function addCasting(Casting $casting){
        array_push($this->_casting,$casting);
    }
//pour l'acteur penser à $this du toString humain
    public function infoActeur(){
        $result="L'acteur $this a joué dans :<br>";
        $result.="<table style='border: 1px solid black' ><tr>
            <th>Titre du Film</th>
            <th>Date de Sortie</th>
            <th>Role</th>
            <th>Genre</th>
            <th>Synopsis</th>";
        foreach ($this->_casting as $casting){
            $result.="<tr><td style='border: 1px solid black'>".$casting->getfilmTitre()."</td>
            <td style='border: 1px solid black'>".$casting->getsortieFilm()."</td>
            <td style='border:1px solid black'>".$casting->getnomRole()."</td>
            <td style='border: 1px solid black'>".$casting->getgenreFilm()."</td>
            <td style='border: 1px solid black'>".$casting->getsynopsisFilm()."</td></tr>";
            
        }
        $result.="</table><br>";
        
        return $result;
    }
}