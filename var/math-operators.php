<?php

$name = "Carol Sanches";

$notas = array(4,8,5);

$media = array_sum($notas)/count($notas);

echo 'A média do aluno (a) ' . $name .' é '. $media;

