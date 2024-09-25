<?php 

$notes = [7.5, 3.2 ,8 , 10, 6.5 ,2, 2];

$notesUniques = array_unique($notes); 

rsort($notesUniques);

$highest_grades = array_slice($notesUniques, 0 , 3);

var_dump($highest_grades);

echo "3 Maiores notas do array: " .implode("," ,$highest_grades).PHP_EOL;
