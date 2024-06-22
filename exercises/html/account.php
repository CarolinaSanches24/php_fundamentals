<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $holder = trim($_POST['holder']);
    $balance = trim($_POST['balance']);

    if(!is_numeric($balance)){
        echo "value is invalid";
        return ;
    }

    $accountBank = [
        "holder" => $holder,
        "balance" => $balance
    ];

    echo "<h1>Informações da Conta Bancária</h1>";
    echo "<p><strong>Titular:</strong> " . htmlspecialchars($accountBank['holder']) . "</p>";
    echo "<p><strong>Saldo:</strong> R$ " . number_format($accountBank['balance'], 2, ',', '.') . "</p>";
}

   

