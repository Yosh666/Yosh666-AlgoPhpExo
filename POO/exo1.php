<?php
/*Un compte bancaire est identifié par :
- un libellé (compte courant, livret A, ...)
- un solde initial
- une devise monétaire
- un titulaire unique

Un titulaire est identifié par :
- un nom
- un prénom
- une date de naissance
- une ville
- l'ensemble de ses comptes bancaires

On doit pouvoir :
- Afficher toutes les informations d'un(e) titulaire (dont l'âge) et l'ensemble des comptes appartenant à celui(celle)-ci
- Afficher toutes les informations d'un compte bancaire (notamment le nom / prénom du titulaire du compte)*/
class Titulaire{
    private $_nom;//a ptet voir en protected ou trouver comment réaliser une relation sororal entre les classes
    private $_prenom;
    private $_dateNaissance;
    private $_ville;
    /*private $_compte; a utiliser quand on saura comment faire*/
    

    public function __construct ($nom,$prenom,$dateNaissance,$ville/*,$compte*/){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateNaissance=$dateNaissance;
        $this->_ville=$ville;
        /*$this->compte=$compte;*/
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getDateNaissance(){
        return $this->_dateNaissance;
    }
    public function getVille(){
        return $this->_ville;
    }
    /*public function getCompte(){
        return $this->_compte;
    }*/
    public function setNom($nom){
        $this->_nom=$nom;
    }
    public function setPrenom($prenom){
        $this->_prenom=$prenom;
    }
    public function setDateNaissance ($dateNaissance){
        $this->_dateNaissance=$dateNaissance;
    }
    public function setVille ($ville){
        $this->_ville=$ville;
    }
    /*public function setCompte($compte){
        $this->compte=$compte
    }*/
    public function getAge(){
        
        $Birth=new DateTime($this->_dateNaissance);
        
        $today= new DateTime();
        $age=$Birth->diff($today);
        $age-> format('%y ans');
        return $age;
        

        

    }
    public function infosDuTitulaire(){
        return $this->_prenom." ".$this->_nom." <br>"
                .$this->age." ans <br>
                Secteur: ".$this->_ville."<br>";
                
    }
}
//construct ($nom,$prenom,$dateNaissance,$ville
$p1=new Titulaire('Juventus','Turin','1983-02-15','Clermont');
 echo $p1->getAge();


