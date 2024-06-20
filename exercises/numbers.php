<?php

$oddNumbers = array();

for ($i = 1; $i < $argc; $i++) {
    if ($argv[$i] % 2 != 0) {
        $oddNumbers[] = $argv[$i];
    }
}

echo 'Números Ímpares: ' . implode(", ", $oddNumbers) . "\n";