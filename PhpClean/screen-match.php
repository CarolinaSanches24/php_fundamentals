<?php

echo "Bem-vindo(a) ao screen match!\n";

$nameFilm = "Top Gun - Maverick";

$releaseYear = 2022;

$quantidadeDenotes = $argc - 1;
$notes = [];

function checkReleaseYear(int $ano): void{
    $result = match (true) {
         $ano>2022 => "Esse filme é um lançamento\n",
         $ano > 2020 && $ano <= 2022 =>"Esse filme ainda é novo\n" ,
         default => "Esse filme não é um lançamento\n"
    };
    echo $result;
}

checkReleaseYear(2021);

function verifyIncludeInThePlan(bool $planPrime , int $releaseYear):bool{

    $result = $planPrime || $releaseYear < 2020;
    return $result;
}

for ($i = 1; $i < $argc; $i++) {
    $notes[] = (float) $argv[$i];
}

$notaFilme = array_sum($notes) / $quantidadeDenotes;
$planPrime = true;
$includedInThePlan = verifyIncludeInThePlan($planPrime, 2019);

$genero = match ($nameFilm) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};


$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];

echo "Nome do filme: " . $nameFilm . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $releaseYear\n";
echo "Incluso no plano: $includedInThePlan\n";
echo "O gênero do filme é: $genero\n";
echo $filme["ano"];
