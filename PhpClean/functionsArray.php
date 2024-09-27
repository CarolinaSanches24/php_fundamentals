<?php

$notes = [8, 10, 5 ,12 ,3 ,2, 1 ];

var_dump($notes);

sort($notes);
$valueMinArray = min($notes);

var_dump($notes);

echo "Array após a ordenação :" .implode(",", $notes).PHP_EOL;
echo "Valor mínimo do array: ".$valueMinArray.PHP_EOL;