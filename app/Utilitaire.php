<?php

namespace App;

class Utilitaire extends Vehicule
{
    private int $volume;
    private int $kilometre;
    private float $prix = 0;
    private string $denomination = "";
    
    public function DonnerPrix(Vehicule $prix, $volume) : void
    {
        $this->prix = $prix+$volume*10;
    }

    public function DonnerDenomination(Vehicule $model, Marque $marque) : void
    {
        $this->denomination = $marque.''.$model;
    }

    public function CalcPopularite($volume) : bool 
    {
        if($this->$volume > 11){
            return true;
        }
        else{
            return false;
        }
    }
}
