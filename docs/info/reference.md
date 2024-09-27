Em PHP, quando você passa um valor por referência para uma função, qualquer alteração feita na variável dentro da função também afetará a variável fora dela. Isso ocorre porque, em vez de passar apenas uma cópia do valor da variável, você está passando a referência para o local da memória onde o valor está armazenado.

Para passar um parâmetro por referência, você usa o símbolo **&** antes do nome do parâmetro na função.

### Exemplo 

```php
<?php

function adicionarCinco(&$numero) {
    $numero += 5;
}

$minhaVariavel = 10;
echo "Antes da função: " . $minhaVariavel . PHP_EOL; // Exibe 10

adicionarCinco($minhaVariavel); // Chama a função passando a variável por referência

echo "Depois da função: " . $minhaVariavel . PHP_EOL; // Exibe 15
?>

```