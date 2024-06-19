<?php

$releaseYear = $argv[1]??2014;

if ($releaseYear >= 2022){
    echo 'Este filme é um lançamento';
}elseif($releaseYear > 2020 && $releaseYear <= 2022){
    echo "Esse filme ainda é novo ";
}
else{
    echo 'Este filme não é um lançamento';
}

