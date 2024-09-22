<?php

ini_set('precision', 17);

var_dump(0.1 + 0.2); // Exibe o erro de precisão dos floats (0.30000000000000004)

$a = '0.1';
$b = '0.2';
$result = bcadd($a, $b, 1); // O terceiro argumento define 1 casa decimal

echo "\n".$result. "\n"; // Saída: 0.3

