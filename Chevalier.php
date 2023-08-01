<?php

class Chevalier extends Heros {
    protected int $musculation=15;
    protected int $lachete=5;
    protected int $intelligence=8;
    protected int $epee=12;
    protected int $endurance=100;
    protected int $sante=100;


    public function giffle(Monstre $monstre){
        $monstre->setSante(
            ($monstre->getSante())-8
        );

    }
 
    public function coupspecial(Monstre $monstre){
        $monstre->setSante(
            ($monstre->getSante())-15
        );
    }
 

      

 
}