<?php

abstract class Monstre extends Personnage{
    protected int $mechancete;
    
    abstract public function rugir($heros);
    abstract public function coupdesalete($heros);

    public function __construct()
    {
        echo "Attention : un montre arrive !";
        
    }
    /**
     * Get the value of mechancete
     */ 
    public function getMechancete()
    {
        return $this->mechancete;
    }

    /**
     * Set the value of mechancete
     *
     * @return  self
     */ 
    public function setMechancete($mechancete)
    {
        $this->mechancete = $mechancete;

        return $this;
    }
}