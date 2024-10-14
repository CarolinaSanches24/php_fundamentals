<?php 

function readCsv($file) {
    // Abre o arquivo para leitura
    if (($handle = fopen($file, "r")) !== false) {
        // Enquanto houver linhas no file
        while (($line = fgetcsv($handle, 1000, ",")) !== false) {
            yield $line; // Retorna a linha lida e "pausa" a função
        }
        fclose($handle); // Fecha o arquivo após terminar
    }
}

// Exemplo de uso do generator para processar o CSV
foreach (readCsv("example.csv") as $line) {
    // $linha é um array com os valores da linha do CSV
    print_r($line); // Exibe cada linha como um array
}