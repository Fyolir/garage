<?php

namespace Tests;

use App\Voiture;

class VoitureTest extends TestCase
{
    /** @test */
    public function can_have_car_name()
    {
        $voiture = new Voiture('Fiat Punto');

        $this->assertEquals('Fiat Punto', $voiture->name);
    }
}
