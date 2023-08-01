<?php

class princesse extends Heros {
    protected int $musculation=6;
    protected int $lachete=2;
    protected int $intelligence=15;
    protected int $epee=6;
    protected int $endurance=120;
    protected int $sante=100;
     
    public function giffle(Monstre $monstre){
        $monstre->setSante(
            ($monstre->getSante())-10
        );

    }
 
    public function coupspecial(Monstre $monstre){
        $monstre->setSante(
            ($monstre->getSante())-12
        );
    }

     
}
