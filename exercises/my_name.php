<?php

if (isset($argv)){
    showName($argv);
}

function showName($argv){
    echo "My name is " .$argv[1] .PHP_EOL;
}