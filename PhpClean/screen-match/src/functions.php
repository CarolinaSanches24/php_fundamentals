<?php

function checkReleaseYear(int $year): void
{
    $result = match (true) {
         $year>2022 => "Esse filme é um lançamento\n",
         $year > 2020 && $year <= 2022 =>"Esse filme ainda é novo\n" ,
         default => "Esse filme não é um lançamento\n"
    };
    echo $result;
}

function verifyIncludeInThePlan(bool $planPrime , int $releaseYear)
{

    $result = $planPrime || $releaseYear < 2020;
    return $result;
}

### CONSTRUCTOR 

function createFilm(string $nome, int $ano, float $nota, string $genero):array
{
    return [
        "nome"=>$nome,
        "ano"=>$ano,
        "nota"=>$nota,
        "genero"=>$genero
    ];
}