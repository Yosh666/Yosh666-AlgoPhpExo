<?php
/*Vous implémenterez une méthode afficherBibliographie qui permettra d’afficher la
bibliographie d’un auteur :*/
class Bibliographie{
    private $_auteur;
    private $_livre;


    public function __construc(Auteur $auteur, Livre $livre){
        $this->_auteur=$auteur;
        $this->_livre=$livre;
        $auteur-> addBiblio($this);
        $livre -> addBiblio($this);
    }
    public function getAuteur(){
        return $this->_auteur->$this;
    }
    public function getLivre(){
        return $this->_livre->$this;
    }


}