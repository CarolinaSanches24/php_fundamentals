#####  Lançar Exceções Customizadas

Você pode criar suas próprias exceções customizadas estendendo a classe Exception. Isso é útil para controlar erros específicos no seu sistema.

```php

class MinhaExcecao extends Exception {
    public function erroCustomizado() {
        return "Erro [{$this->code}]: {$this->message}\n";
    }
}

try {
    throw new MinhaExcecao("Este é um erro customizado", 500);
} catch (MinhaExcecao $e) {
    echo $e->erroCustomizado();
}
```
#### Capturando Exceções Específicas

```php
try {
    throw new InvalidArgumentException("Argumento inválido");
} catch (InvalidArgumentException $e) {
    // Tratamento específico para InvalidArgumentException
    echo "Erro específico: " . $e->getMessage();
} catch (Exception $e) {
    // Tratamento genérico para qualquer outra exceção
    echo "Erro genérico: " . $e->getMessage();
}
```

#####  Re-Lançando Exceções
Às vezes, você pode querer capturar uma exceção, mas depois relançá-la para que outro código possa tratá-la.
```php
try {
    try {
        throw new Exception("Erro interno");
    } catch (Exception $e) {
        echo "Erro capturado: " . $e->getMessage();
        throw $e; // Relançando a exceção
    }
} catch (Exception $e) {
    echo "Exceção re-lançada: " . $e->getMessage();
}

```

#### Exceções Personalizadas para Fluxo de Aplicação

```php
class ValidacaoExcecao extends Exception {}

function validarDados($idade) {
    if ($idade < 18) {
        throw new ValidacaoExcecao("Idade deve ser maior que 18");
    }
    return true;
}

try {
    validarDados(16);
} catch (ValidacaoExcecao $e) {
    echo "Erro de validação: " . $e->getMessage();
}
```

O finally serve para executar um bloco de código independentemente de ocorrer uma exceção ou não, ou seja, ele sempre é executado. Isso pode ser útil quando precisamos executar um código tanto no try, caso não ocorra uma exceção, quanto no catch, caso uma exceção seja lançada. Por exemplo, suponha que você tenha o seguinte código: