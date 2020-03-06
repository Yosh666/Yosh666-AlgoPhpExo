<?php
/*Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, 
un prix et un
auteur*/
class Livre{
    private $_titre;
    private $_parution;
    private $_nbpage;
    private $_prix;
    private $_auteur;
    

    public function __construct($titre, $parution, $nbpage, $prix,Auteur $auteur){
        $this->_titre=$titre;
        $this->_parution=$parution;
        $this->_nbpage=$nbpage;
        $this->_prix=$prix;        
        $this->_auteur=$auteur;
        $auteur->addLivre($this);
               
    }
   
    public function getTitre(){
        return  $this->_titre;
    }
    public function getParution(){
        return $this->_parution;
    }
    public function getNbPage(){
        return $this->_nbpage;
    }
    public function getPrix(){
        return $this->_prix;
    }
    public function getAuteur(){
        return $this->_auteur;
    }

    

    public function __toString(){
        return "Le livre ".$this->_titre.
        " paru en: ".$this->_parution.
        " nombre de pages: ".$this->_nbpage.
        "coute : ".$this->_prix. "€<br>";
    }
    
    public function infoLivre(){
        return $this;
    }
        
    
}