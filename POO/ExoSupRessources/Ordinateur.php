<?php
Class Ordinateur{
    /**
     * @param $statut par défaut le statut=0 
     */
    private $_marque;
    private $_cpuClock;
    private $_statut=0;
    private $_hdd;
    private static $_nbPostes=0;//attribut statique 
    

    const HDD_SMALL="256Go";
    const HDD_MEDIUM="500Go";
    const HDD_BIG="1To";



    /**
     * @param string $marque de l'ordinateur
     *@param  $cpuClock vitesse de l'ordi
     */
    public function __construct($data){
        $this->_marque=$data[0];
        $this->_cpuClock=$data[1];
        self::$_nbPostes++;//incrémentation du compteur
    }     
    

    public function getMarque(){
        return $this->_marque;
    }
    public function getCpuClock(){
        return $this->_cpuClock;
    }
    /**
     * Get the value of _statut
     */ 
    public function getStatut()
    {
        return $this->_statut;
    }
    public function getHdd(){
        return $this->_hdd;
    }

    public function setMarque($marque){
        $this->_marque=$marque;
    }
    public function setCpuClock($speed){
        $this->_cpuClock=$speed;
    }
    /**
     * @param const $capacite sera forcément une constante définie
     */
    public function setHdd($capacite){//le array force a choisir dans l'une des trois constante pr valider la taille du hdd
        if(in_array($capacite,[self::HDD_SMALL,self::HDD_MEDIUM,self::HDD_BIG])){
            $this->_hdd=$capacite;
        }
        
    }
    public static function combienPoste(){//méthode statique il faut le préciser dans la fction
        echo "Il y a ".self::$_nbPostes." postes<br>";
    }


    public function allumer(){
        $this->_statut=1;
    }










    
}