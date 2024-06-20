<?php

echo "Bem-vindo(a) ao screen match!\n";

$nameFilm = "Top Gun - Maverick";

$releaseYear = 2022;
$quantNotes = $argc - 1;
$sumOfNotes = 0;

for($i = 1 ; $i < $argc; $i++){
    $sumOfNotes += $argv[$i];
}
$noteFilm = $sumOfNotes / $quantNotes;
$planoPrime = true;

echo "Nome do Filme: $nameFilm\n";
echo "Ano de Lançamento: $releaseYear\n";
echo "Soma das Notas: $sumOfNotes\n";
echo "Média das Notas: $noteFilm\n";
echo "Plano Prime: " . ($planoPrime ? "Sim" : "Não") . "\n";
