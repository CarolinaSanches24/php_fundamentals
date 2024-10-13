<?php

require __DIR__ .'/Animal.php';

class Cachorro extends Animal {
    #[Override]
    public function falar() {
        return "Latido";
    }
}

$dog = new Cachorro();
echo $dog->falar().PHP_EOL;