<?php

// $nameFilm = "Top Gun - Maverick";
$nameFilm = "Thor: Ragnarok";
// $nameFilm = "Se beber não case";

$gender = match ($nameFilm){
    "Top Gun Maverick" => "ação",
    "Se beber não case" => "comédia",
    "Thor: Ragnarok" => "super-herói",
    default => "Unknown Gender"
};

echo 'Genero do Filme ' . $gender;

