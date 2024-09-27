<?php

$nameFilm = "Top Gun - Maverick";

var_dump($nameFilm);

$position = stripos($nameFilm, '-');

echo "String encontrada na posição :" .$position.PHP_EOL;

var_dump(substr($nameFilm , 0 , $position));

echo "Exibir somente a String Top :" . substr($nameFilm, 0, 3).PHP_EOL;

