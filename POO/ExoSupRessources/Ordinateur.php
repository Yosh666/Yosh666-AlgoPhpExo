<?php
Class Ordinateur{
    /**
     * @param $statut par défaut le statut=0 
     */
    private $_marque;
    private $_cpuClock;
    private $_statut=0;
    private $_hdd;
    private $test;

    const HDD_SMALL="250Go";
    const HDD_MEDIUM="500Go";
    const HDD_BIG="1To";



    /**
     * @param string $marque de l'ordinateur
     *@param  $cpuClock vitesse de l'ordi
     */
    public function __construct($marque,$cpuClock){
        $this->_marque=$marque;
        $this->_cpuClock=$cpuClock;
    }     
    

    public function getMarque(){
        return $this->_marque;
    }
    public function getCpuClock(){
        return $this->_cpuClock;
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


    public function allumer(){
        $this->_statut=1;
    }









}