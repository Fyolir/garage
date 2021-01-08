<?php

namespace App;

class Voiture
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
