<?php

$class = [];
$notes = [];


for ($i = 1; $i <= 45; $i++){
    $class[] = "Aluno $i";
}

// Adiciona 4 notas para cada aluno
foreach ($class as $student){
    $notes[$student] = addNote();
}

// Função que gera 4 notas aleatórias entre 0 e 10 para cada aluno
function addNote(){
    $notesStudents = [];
    for ($j = 1; $j <= 4; $j++){
        $notesStudents[] = rand(0, 10);
    }
    return $notesStudents;
}


function showNotes($notes){
    foreach($notes as $student => $notesStudents){
        echo "$student: Notas = " . implode(", ", $notesStudents) . PHP_EOL;
    }
}

showNotes($notes);
