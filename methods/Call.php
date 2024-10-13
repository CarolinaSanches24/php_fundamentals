<?php

class Call{
    public function __call($name, $arguments)
    {
        echo "Você chamou o método '$name' com os argumentos: " . implode(', ', $arguments).PHP_EOL;
    }
}

$obj = new Call();
$obj->createCall('teste','teste');
