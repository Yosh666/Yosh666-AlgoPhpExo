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
    private $_compte; /*a utiliser quand on saura comment faire*/
    

    public function __construct ($nom,$prenom,$dateNaissance,$ville){
        $this->_nom=$nom;
        $this->_prenom=$prenom;
        $this->_dateNaissance=new DateTime($dateNaissance) ;
        $this->_ville=$ville;
        $this->_compte=[];
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
    public function getCompte(){
        return $this->_compte;//créer une fonction dans compte bancaire pour charger les données dans un tableau;
    }
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
        $now = new DateTime(); 
		$interval = $this->_dateNaissance->diff($now); 

		$age = $interval->format('%y'); 
		return $age; 
        

        

    }
    public function addCompte(Compte $compte) {//on prévient qu'on a un objet compte et on le push dans un tableau
        array_push($this->_compte, $compte);
    }
    public function infosDuTitulaire(){/*on peut appeler une méthode directement dans une autre méthode
                sinon il aurait fallu que je rentre la variable age dans le construct*/
    
        $result= $this->_prenom." ".$this->_nom." <br>"
                .$this->getAge()." ans <br>
                Secteur: ".$this->_ville."<br> 
                <table style='border: 1px solid black'> <tr> <th>Libéllé</th> <th>Solde</th> <th>Devise</th></tr>";
        foreach ($this->_compte as $key => $value){
            $result.= "<tr><td>".$value->getLibelle()."</td><td>".$value->getSoldeInitial()."</td><td>".$value->getDevise()."</td></tr>";
        }
        $result.= "</table>";
        return $result;
                
    }
    /*__construct(Titulaire $titulaire,$libelle,$soldeinitial,$devise){*/
}
//pour voir le rséultat allez dans index



