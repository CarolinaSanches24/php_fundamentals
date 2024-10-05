<?php

require __DIR__ .'/Model/Gender.php';
require __DIR__ . "/Model/Film.php";

$filme = new Film(
    name: 'Thor - Ragnarok',
    year: 2021,
    gender: Gender::SuperHeroi,
);

$filme->evaluate(10);
$filme->evaluate(10);
$filme->evaluate(10);

var_dump($filme);
echo $filme->media().PHP_EOL;
echo $filme->name."\n";