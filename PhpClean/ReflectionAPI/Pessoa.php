<?php

class Pessoa{
    public string $name;
    private int $cpf;

    public function rename(string $newName){
        $this->name = $newName;
    }
    private function updateCpf(int $newCpf){
        $this->cpf = $newCpf;
    }
}

// A Reflection API está sendo usada para descobrir e chamar o método rename()
//  de forma mais avançada, 
// sem chamá-lo diretamente como faria normalmente.

$refClass = new ReflectionClass('Pessoa');

$listFunctions = $refClass->getMethod('rename');
$instance = $refClass->newInstance();

$listFunctions->invoke($instance, "Carolina");

echo $instance->name .PHP_EOL;