<?php
 

abstract class Personnage {
    private int $musculation;
    private int $lachete;
    private int $endurance;
    private int $sante;

 

    /**
     * Get the value of musculation
     */ 
    public function getMusculation()
    {
        return $this->musculation;
    }
 

    /**
     * Set the value of musculation
     *
     * @return  self
     */ 
    public function setMusculation($musculation)
    {
        if ($musculation<0) {
            $this->musculation = $musculation;

            return $this;
        } 
    }

    /**
     * Get the value of lachete
     */ 
    public function getLachete()
    {
        return $this->lachete;
    }

    /**
     * Set the value of lachete
     *
     * @return  self
     */ 
    public function setLachete($lachete)
    {
        $this->lachete = $lachete;

        return $this;
    }
 

    /**
     * Get the value of endurance
     */ 
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * Set the value of endurance
     *
     * @return  self
     */ 
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;

        return $this;
    }

    /**
     * Get the value of sante
     */ 
    public function getSante()
    {
        return $this->sante;
    }

    /**
     * Set the value of sante
     *
     * @return  self
     */ 
    public function setSante($sante)
    {
        $this->sante = $sante;

        return $this;
    }
}