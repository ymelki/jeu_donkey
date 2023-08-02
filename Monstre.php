<?php

abstract class Monstre extends Personnage{
    protected int $mechancete;
    
    abstract public function rugir(Heros $heros);
    abstract public function coupdesalete(Heros $heros);


    public function __construct()
    {
        echo "Attention : un montre arrive !";
        
    }

    function sePresenter(){
        parent::sePresenter();
        echo "je suis un monstre : 
        
        Ma mechancete : ".$this->mechancete
        ;
        
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