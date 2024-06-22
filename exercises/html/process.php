<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os números do input e remove espaços em branco extras
    $numbersString = trim($_POST['numbers']);

    // Divide a string em um array, usando a vírgula como delimitador
    $numbersArray = explode(",", $numbersString);

    // Remove espaços em branco ao redor de cada número
    $numbersArray = array_map('trim', $numbersArray);

    // Converte os valores para inteiros
    $numbersArray = array_map('intval', $numbersArray);

    // Remove duplicados
    $uniqueNumbers = array_unique($numbersArray);

    // Reordena os índices
    $uniqueNumbers = array_values($uniqueNumbers);

    // Exibe o array resultante
    echo "Array without duplicates: <br>";
    echo "<pre>";
    print_r($uniqueNumbers);
    echo "</pre>";
}
