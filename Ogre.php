<?php

class Ogre extends Monstre {
    protected int $arme=15;
    protected int $musculation=10;
    protected int $mechancete=12;
    protected int $lachete=3;
    protected int $endurance=100;
    protected int $sante=100;

    public function __construct()
    {
       parent::__construct();
       echo ": C'est un ogre !";        
    }

    public function rugir(Heros $heros){
        $heros->setSante(
            ($heros->getSante())-5
        );
    }
    public function coupdesalete(Heros $heros){
        $heros->setSante(
            ($heros->getSante())-15
        );
    }
 
}