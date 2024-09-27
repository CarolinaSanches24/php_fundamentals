<?php

require __DIR__ . "/src/functions.php";

echo "Bem-vindo(a) ao screen match!\n";

$nameFilm = "Top Gun - Maverick";

$releaseYear = 2022;

$quantidadeDenotes = $argc - 1;
$notes = [];


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

### PARAMETROS NOMEADOS
$filme = createFilm(nome: "Thor: Ragnarok", ano: 2021, nota:7.8, genero:"super-herói");


echo "Nome do filme: " . $nameFilm . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $releaseYear\n";
echo "Incluso no plano: $includedInThePlan\n";
echo "O gênero do filme é: $genero\n";
echo $filme["ano"].PHP_EOL;
checkReleaseYear(2021);


echo json_encode($filme);
var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}',true));

// Write in file 

$filmInJson = json_encode($filme);
file_put_contents(__DIR__ . '/film.json' , $filmInJson);

//Read in File

$res = file_get_contents(__DIR__ . '/film.json');

var_dump(json_decode($res, true));
