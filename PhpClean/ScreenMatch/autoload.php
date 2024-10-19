<?php

spl_autoload_register(function (string $className) {
    $path = str_replace('ScreenMatch', 'src', $className) . '.php';
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);

    $pathCompleted = __DIR__ . DIRECTORY_SEPARATOR . $path;

 
    // echo "Tentando carregar: " . $pathCompleted . PHP_EOL;

    if (file_exists($pathCompleted)) {
        require_once $pathCompleted;
    } else {
        echo "Arquivo não encontrado: " . $pathCompleted . PHP_EOL;
    }
});
