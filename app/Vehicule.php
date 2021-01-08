<?php

namespace App;

abstract class Vehicule
{
    public string $model;
    public bool $popularite;
    protected float $prix;
    protected string $denomination;

    public function __construct(string $model, bool $popularite, float $prix, string $denomination)
    {
        $this->model = $model;
        $this->popularite = $popularite;
        $this->prix = $prix;
        $this->denomination = $denomination;
    }
}