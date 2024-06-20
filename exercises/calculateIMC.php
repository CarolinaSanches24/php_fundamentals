<?php 

echo "Por favor, insira seu peso em kg: ";
$weight = trim(fgets(STDIN));


echo "Por favor, insira sua altura em metros: ";
$height = trim(fgets(STDIN));


if (!is_numeric($weight) || !is_numeric($height)) {
    echo "Peso e altura devem ser valores numéricos.\n";
    exit(1);
}


$weight = (float)$weight;
$height = (float)$height;


$imc = $weight / ($height * $height);


echo $imc;

if ($imc < 18.5) {
    $category = "Abaixo do peso";
} elseif ($imc < 24.9) {
    $category = "Peso normal";
} elseif ($imc < 29.9) {
    $category = "Sobrepeso";
} else {
    $category = "Obesidade";
}

echo "Seu IMC é: " . round($imc, 2) . "\n";
echo "Categoria: " . $category . "\n";