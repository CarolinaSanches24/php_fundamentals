<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  insertFilm();
}

function insertFilm (){
    $path = __DIR__ . '/films.json';

    $newfilm = [
        'nome' => $_POST['nome'] ,
        'ano' => $_POST['ano'] ,
        'nota' => $_POST['nota'] ,
        'genero' => $_POST['genero']
    ];

    if (file_exists($path))
    {
    $contentFilm = file_get_contents($path);
    $films = json_decode($contentFilm, true);

    } else {
    $films = [];
    }

    $films[] = $newfilm;
    file_put_contents($path, json_encode($films, JSON_PRETTY_PRINT));
    echo 'Filme adicionado Corretamente !';
}

// Redirect 
header('Location: /sucess.php?filme=' . $film['nome']);
?>