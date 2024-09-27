<?php

$path = __DIR__ . '/teste.txt';

//ABRIR ARQUIVO EM MODO LEITURA 

$openFileRead = fopen($path, 'r'); 

$firstLine = fgets($openFileRead);
echo $firstLine.PHP_EOL;
fclose($openFileRead); //FECHAR ARQUIVO

$phrase = "PHP é incrível!";
//ADICIONAR UM ELEMENTO APPEND 
$openFileWrite = fopen($path,'a');
fwrite($openFileWrite, $phrase);
fclose($openFileWrite);


### CONVERTER STRING EM OBJETO 

$dataString = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$dataObject= json_decode($dataString);
var_dump($dataObject);
$pessoa = [
    "nome"=> $dataObject->nome,
    "anoNascimento"=> $dataObject->anoNascimento,
    "profissao"=>$dataObject->profissao
];

echo json_encode($pessoa).PHP_EOL;