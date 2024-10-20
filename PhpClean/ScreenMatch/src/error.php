<?php

use ScreenMatch\Model\Episodes;
use ScreenMatch\Model\Gender;
use ScreenMatch\Model\Serie;
use ScreenMatch\Services\ConvertionNoteStars;

require __DIR__ . '/../autoload.php';

$serie = new Serie('Stranger Things',2018,Gender::Terror,1,5,10);
$episode = new Episodes($serie, 'Pilote',1);

$convertion = new ConvertionNoteStars();
echo $convertion->convertion($episode);

