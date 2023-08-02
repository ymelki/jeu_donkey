<?php

abstract class Heros extends Personnage implements Iheros{
    protected int $intelligence;
    protected int $epee;

    public function __construct()
    {
        echo "Attention : un heros arrive !";
        
    }  
 
    abstract public function coupspecial(Monstre $monstre);
    abstract public function giffle(Monstre $monstre);

    
    /**
     * Get the value of intelligence
     */ 
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set the value of intelligence
     *
     * @return  self
     */ 
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get the value of epee
     */ 
    public function getEpee()
    {
        return $this->epee;
    }

    /**
     * Set the value of epee
     *
     * @return  self
     */ 
    public function setEpee($epee)
    {
        $this->epee = $epee;

        return $this;
    }
}