<?php

class princesse extends Heros {
    private int $musculation=6;
    private int $lachete=2;
    private int $intelligence=15;
    private int $epee=6;
    private int $endurance=120;
    private int $sante=100;
     
    public function giffle($monstre){
        $monstre->setSante(
            ($monstre->getSante())-10
        );

    }
 
    public function coupspecial($monstre){
        $monstre->setSante(
            ($monstre->getSante())-12
        );
    }

     
}
