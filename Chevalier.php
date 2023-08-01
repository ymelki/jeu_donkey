<?php

class Chevalier extends Heros {
    private int $musculation=15;
    private int $lachete=5;
    private int $intelligence=8;
    private int $epee=12;
    private int $endurance=100;
    private int $sante=100;


    public function giffle($monstre){
        $monstre->setSante(
            ($monstre->getSante())-8
        );

    }
 
    public function coupspecial($monstre){
        $monstre->setSante(
            ($monstre->getSante())-15
        );
    }
 

      

 
}