<?php

namespace App;

require __DIR__.'/../vendor/autoload.php';

$voiture = new Voiture('Peugeot 205');

dump($voiture);

// Format attendu de la facture du panier

$facture = [
    "Peugoet 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
    505,
];
