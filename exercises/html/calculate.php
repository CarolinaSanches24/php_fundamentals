<?php

$noteOne = 0;
$noteTwo = 0;
$noteTree = 0;
$average = 0;
$status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $noteOne = $_POST['noteOne'];
    $noteTwo = $_POST['noteTwo'];
    $noteThree = $_POST['noteThree'];
    
    if (is_numeric($noteOne) && is_numeric($noteTwo) && is_numeric($noteThree)) {
        $average = ($noteOne + $noteTwo + $noteThree) / 3;
        if ($average < 6) {
            $status = "Reprovado";
        } else {
            $status = "Aprovado";
        }
    } else {
        $status = "Por favor, insira notas válidas.";
    }

    echo "<p>Média: " . number_format($average, 2) . "</p>";
    echo "<p>Situação: " . $status . "</p>";
}


