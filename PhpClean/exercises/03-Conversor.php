<?php

echo "Informe o valor em ºCelsius que deseja converter:\n";
$celsius = (float) fgets(STDIN);

function celsiusToFahrenheit(float $c): float {
    return ($c * 9/5) + 32; 
}

$fahrenheit = celsiusToFahrenheit($celsius);

echo "O valor º$celsius celsius convertido para Fahrenheit é igual a $fahrenheit \n";
