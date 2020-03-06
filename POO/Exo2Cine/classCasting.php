    <?php
//ah mais oui il faut passer par ici pour faire tout les array push en fait!
class Casting{
    private $_acteur;
    private $_role;
    private $_film;


    public function __construct(Film $film,Acteur $acteur, Role $role){
        $this->_film=$film;
        $this->_acteur=$acteur;
        $this->_role=$role; 
        $film->addCasting($this);
        $acteur->addCasting($this);
        $role->addCasting($this); 
    }
    public function getfilmTitre(){
        return $this->_film->getTitre();
    }
    public function getsortieFilm(){
        return $this->_film->getSortie();
    }
    public function getnomRole(){
        return $this->_role->getRole();
    }
    public function getgenreFilm(){
        return $this->_film->getGenre()->getStyle();
    }
    public function getsynopsisFilm(){
        return $this->_film->getSynopsis();
    }
    public function getnomActeur(){
        return $this->_acteur->getPrenom().' '.$this->_acteur->getNom();
    }

}