<?php

if (isset($argv)){
     // Remover o nome do script (no caso o nome do arquivo)
     array_shift($argv);

    $result = calculateMedia($argv);
    echo  "Resultado :" .$result .PHP_EOL;
    
}

function calculateMedia($notes){
    $sum = 0;
    $countNotes = count($notes);

    foreach($notes as $note){
        $sum += $note;
    }

    if($countNotes > 0){
        return $sum/$countNotes;
    }else{
        return 0;
    }
}