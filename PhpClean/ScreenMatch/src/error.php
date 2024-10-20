<?php

use ScreenMatch\Model\Episodes;
use ScreenMatch\Model\Gender;
use ScreenMatch\Model\Serie;
use ScreenMatch\Services\ConvertionNoteStars;

require __DIR__ . '/../autoload.php';

$serie = new Serie('Stranger Things',2018,Gender::Terror,1,5,10);
$episode = new Episodes($serie, 'Pilote',1);

try{
    $episode->evaluate(-10);
    $convertion = new ConvertionNoteStars();
    echo $convertion->convertion($episode);
}catch(Throwable $e){
    echo "Válores inválidos: ". $e->getMessage(). "\nStatus Code:" .$e->getCode().PHP_EOL;
}


