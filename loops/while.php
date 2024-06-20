<?php

$balance = 300;

$withdrawalAmount = $argv[1];

while ($balance > 0){
    $balance -= $withdrawalAmount;
    $withdrawalOrder++;
    echo "Saque $withdrawalOrder: $withdrawalAmount. Saldo restante: $balance\n";
}

echo 'Saldo Final : ' .$balance;
