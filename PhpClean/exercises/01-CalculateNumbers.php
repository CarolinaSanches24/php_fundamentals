<?php

echo "Informe o primero número: \n";
$numberOne = (float) fgets(STDIN);
echo "Informe o segundo número: \n";
$numberTwo = (float) fgets(STDIN);

echo "Operações matématicas disponíveis\n".
"[1] - Soma\n
[2] - Multiplicação\n
[3] - Divisão\n
[4] - Subtração\n
Informe o número da opção desejada:\n";

$operationMath = (int) fgets(STDIN);

function calculteNumbers(float $a , float $b , int $op):float{
    switch ($op){
        case $op === 1:
            $result = $a + $b;
            break;
        case $op === 2: 
            $result = $a * $b;
            break;
        case $op === 3:
            $result = $a/$b;
            break;
        default :
            $result = $a - $b;
            break;
    }
    return $result;
}

echo " \nResultado :" .calculteNumbers($numberOne, $numberTwo, $operationMath).PHP_EOL;