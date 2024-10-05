<?php

require __DIR__ . "/Model/Film.php";

$filme = new Film(

    name: 'Thor - Ragnarok',
    year: 2021,
    gender: 'super-heroi',
    note: 7.2
);

$filme->evaluate(10);
$filme->evaluate(10);
$filme->setYearOfRelease(2024);

var_dump($filme);

echo $filme->media().PHP_EOL;