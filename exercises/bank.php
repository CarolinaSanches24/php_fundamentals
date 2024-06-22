<?php

$name = 'Carol Sanches';
$balance = 1000;
$caractere = "*";
$repeat = 50;

$caracter = str_repeat($caractere, $repeat);

do {
    echo "$caracter \n";
    echo "Titular: $name\n";
    echo "Saldo atual: $balance \n";
    
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor \n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "$caracter \n";
    echo "Informe o número da opção correspondente:\n";

    
    $option = (int) fgets(STDIN); 
    
    switch($option) {
        case 1:
            
            echo "Titular: $name\n";
            echo "Saldo atual: $balance \n";
            echo $caracter;
            break;
        case 2:
            echo "Informe o valor que deseja sacar: ";
            $withdraw = (float) fgets(STDIN);
    
            if($withdraw > $balance) {
                echo "Saldo insuficiente!\n";
            } else {
                $balance -= $withdraw;
                echo "Você sacou R$$withdraw. Saldo atual: R$$balance\n";
            }
            break;
        case 3:
            echo "Informe o valor para depósito: ";
            $deposit = (float) fgets(STDIN);
            $balance += $deposit;
            echo "Você depositou R$$deposit. Saldo atual: R$$balance\n";
            break;
        case 4:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção Inválida!\n";
    }
} while ($option != 4);

echo "$caracter \n";

