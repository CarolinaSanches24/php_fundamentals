#### MATCH

O match em PHP é uma estrutura de controle que compara um valor com uma lista de expressões, retornando o resultado da primeira correspondência encontrada. Ele é semelhante ao switch, mas com algumas vantagens:

- Retorna um valor: O match retorna o valor da primeira correspondência diretamente.
- Comparação estrita: O match usa comparação estrita (===), o que significa que os tipos também são comparados.
- Sem break: Diferente do switch, você não precisa usar break após cada caso.
- Pode ter um valor default: Para lidar com casos em que nenhuma correspondência for encontrada.

```php
<?php

$nota = 85;

$conceito = match (true) {
    $nota >= 90 => 'A',
    $nota >= 80 => 'B',
    $nota >= 70 => 'C',
    $nota >= 60 => 'D',
    default => 'F', // Se a nota for menor que 60
};

echo "A nota é: $nota, conceito: $conceito";

```

O uso do true no match (true) ajuda porque o match em PHP foi projetado para comparar valores específicos e não permite diretamente a comparação de expressões booleanas (como $ano > 2022) sem um valor fixo. Quando usamos match (true), estamos dizendo ao PHP que queremos que ele compare cada expressão com true.

Com true: Ao fazer **match (true)**, estamos efetivamente dizendo "verifique qual dessas condições retorna true". Cada condição (como $ano > 2022, $ano > 2020 && $ano <= 2022) retorna um valor booleano (true ou false). O PHP então verifica qual dessas expressões retorna true e usa o valor associado a essa condição.

#### IMPLODE

A função implode() em PHP é usada para juntar os elementos de um array em uma string, separando-os por um delimitador (como uma vírgula, espaço, ou qualquer outro caractere). Essa função é útil quando você tem vários valores em um array e quer exibi-los como uma única string, com os valores separados por algum caractere.

```php
implode(string $separator, array $array): string

<?php

$notas = [8, 9, 7, 10]; // Um array com notas

// Converte o array de notas em uma string, separando por vírgula
$stringNotas = implode(", ", $notas);

echo "As notas são: " . $stringNotas;

```

Output : As notas são: 8, 9, 7, 10
