<?php

echo "Informe o seu peso:\n";
$weight = (float) fgets(STDIN);
echo "Informe a sua altura:\n";
$height = (float) fgets(STDIN);

function calculateImc(float $weight, float $height):float{
    $result = $weight/ pow($height, 2);
    return $result;
}

$imc= calculateImc($weight, $height);
echo "\nSeu IMC é = " . number_format($imc , 2) .PHP_EOL;