<?php

namespace App;

class Marque
{
    public string $marque;

    public function __construct(string $marque)
    {
        $this->marque = $marque;
    }
}