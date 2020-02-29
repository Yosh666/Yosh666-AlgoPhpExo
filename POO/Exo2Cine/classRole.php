<?php
class Role{
    private $_role;
    private $_casting;
    
    public function __construct($role){
        $this->_role=$role;
        $this->_casting=[];       
    }
    public function getRole(){
        return $this->_role;
    }
    public function getCasting(){
        return $this->_casting;
    }

    public function addCasting(Casting $casting){
        array_push($this->_casting,$casting);
    }
    public function infoRole(){
        $result="Le role " .$this->_role." est dans:<br>";
        $result.="<table style='border: 1px solid black' ><tr>
            <th>Titre du Film</th>
            <th>Date de Sortie</th>            
            <th>Genre</th>
            <th>Joué par : </th>
            <th>Synopsis</th>";
        foreach ($this->_casting as $casting){
            $result.="<tr><td style='border: 1px solid black'>".$casting->getfilmTitre()."</td>
            <td style='border: 1px solid black'>".$casting->getsortieFilm()."</td>           
            <td style='border: 1px solid black'>".$casting->getgenreFilm()."</td>
            <td style='border:1px solid black'>".$casting->getnomActeur()."</td>
            <td style='border: 1px solid black'>".$casting->getsynopsisFilm()."</td></tr>";            
        }
        $result .="</table><br>";
        return $result;   
    }

}