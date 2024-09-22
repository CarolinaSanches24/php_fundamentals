<?php

function Main($argv){
    $celsius = getInputValue($argv);
    $fahrenheit = celsiusToFahrenheit($celsius);
    echo "$celsius °C é igual a $fahrenheit °F" . PHP_EOL;
}
function getInputValue($argv){
    array_shift($argv);
    return $argv[0]?? exit("Por favor informe a temperatura em Celsius:".PHP_EOL);
}

function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32; 
}

Main($argv);