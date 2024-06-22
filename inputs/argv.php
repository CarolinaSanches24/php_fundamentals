<?php
$year = 2022; // Define um valor padrão para $year

if (isset($argv[1])) {
    $year = $argv[1]; // Se um argumento for passado, atribui o valor do primeiro argumento para $year
}

echo "Year is: " . $year . "\n"; // Imprime o valor de $year
