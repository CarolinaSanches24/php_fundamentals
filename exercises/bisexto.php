<?php

function Main($argv){
    $ano = getInputValue($argv);
    $result = isLeapYear($ano);

    if ($result) {
    echo "$ano é um ano bissexto." . PHP_EOL;
    } else {
    echo "$ano não é um ano bissexto." . PHP_EOL;
    }
}
function getInputValue($argv){
    array_shift($argv);
    return $argv[0]?? exit("Por favor informe um ano a ser analisado :):".PHP_EOL);
}

function isLeapYear($year) {
    // Verifica se é divisível por 4, não divisível por 100, ou divisível por 400
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true; 
    } else {
        return false; 
    }
}

Main($argv);