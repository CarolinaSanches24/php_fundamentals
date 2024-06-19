<?php

// 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.

$m = $argv[1]??3.75;

echo $m*100;


// 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

$year = $argv[1]??2014;

if($year % 4 == 0){
    echo "O ano $year é bissexto";

}else{
    echo "O ano não é bissexto";
}


// 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.

$celsius = $argv[1] ?? 30;

echo ($celsius*1.8) + 32;
