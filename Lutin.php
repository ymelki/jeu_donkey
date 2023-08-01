<?php

class Lutin extends Monstre {
    protected int $lachete=10;
    protected int $musculation=8;
    protected int $mechancete=8;
    protected int $salete=15;
    protected int $endurance=100;
    protected int $sante=100;

    public function rugir($heros){
        $heros->setSante(
            ($heros->getSante())-10
        );
    }
    public function coupdesalete($heros){
        $heros->setSante(
            ($heros->getSante())-4
        );
    }

    /**
     * Get the value of salete
     */ 
    public function getSalete()
    {
        return $this->salete;
    }

    /**
     * Set the value of salete
     *
     * @return  self
     */ 
    public function setSalete($salete)
    {
        $this->salete = $salete;

        return $this;
    }
}