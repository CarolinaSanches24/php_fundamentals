<?php

function main($argv){
    $metros = getInputValue($argv);
    $centimetros = conversionMforCm($metros);
    echo "Valor $metros m² para cm é igual a $centimetros cm".PHP_EOL;
}

function getInputValue($argv){
    array_shift($argv);
    return $argv[0]?? exit ("Por favor informe um valor em m²".PHP_EOL);
}

function conversionMforCm($m){
    $result = $m * 100;
    return $result;
}

main($argv);