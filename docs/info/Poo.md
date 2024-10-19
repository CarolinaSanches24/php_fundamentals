#### Propriedade somente leitura 

Em inglês, chamamos isso de **readonly**. No PHP, usamos a palavra reservada readonly para indicar que certas propriedades só podem ser lidas. Uma vez que essas propriedades são definidas, não podem ser modificadas posteriormente.

### Benefícios do modificador readonly
O modificador readonly permite que tenhamos propriedades públicas que podem ser lidas livremente, mas só podem ser escritas uma vez dentro da classe, geralmente no construtor. Por isso, é comum ver propriedades promovidas a partir do construtor usando readonly.

Um detalhe interessante é que, se todas as nossas propriedades fossem readonly, inclusive o nosso array de notas, poderíamos ter a própria classe definida como readonly.
Podemos retirar o modificador das propriedades individuais e adicioná-lo diretamente na classe, fazendo com que todas as propriedades sejam readonly.

Propriedades readonly precisam ser inicializadas dentro da classe onde são definidas.

[Saiba mais sobre Readonly](https://php.watch/versions/8.1/readonly)

#### Enumerations 

A função **from()** é usada em enums no PHP para obter uma instância de enum com base em um valor. O método estático from() recebe um valor e retorna o caso correspondente da enum que tem esse valor.

O valor passado para o método from() precisa ser exatamente igual ao valor associado à enum, senão ele lançará uma exceção. Se você precisar de um comportamento mais seguro, você pode usar o método **tryFrom()**, que retorna null se o valor não for encontrado:


#### Parent Herança

Um parent no PHP é usado em programação orientada a objetos (OOP) para acessar métodos ou propriedades de uma classe "pai" a partir de uma classe "filha". 

```php
<?php
class Pai {
    public function saudacao() {
        echo "Olá do Pai!";
    }
}

class Filha extends Pai {
    public function saudacao() {
        parent::saudacao(); // Chama o método da classe Pai
        echo " E olá da Filha!";
    }
}

$filha = new Filha();
$filha->saudacao();
?>

```

Output 

```bash
Olá do Pai! E olá da Filha!
```

### Modificadores de acesso

Imagine que você tem uma casa, e dentro dessa casa tem uma gaveta com documentos importantes.

- Public: Qualquer pessoa, seja de dentro ou fora da sua casa, pode abrir essa gaveta.
- Private: Só você pode abrir essa gaveta, mais ninguém.
- Protected: Só você e as pessoas da sua família (por exemplo, seus filhos) podem abrir essa gaveta. Pessoas de fora da família não têm acesso direto.

```php
<?php
class Pai {
    protected $segredo = "Este é um segredo de família";

    protected function contarSegredo() {
        return $this->segredo;
    }
}

class Filha extends Pai {
    public function revelarSegredo() {
        // A classe Filha pode acessar a propriedade e método protected da classe Pai
        return $this->contarSegredo();
    }
}

$filha = new Filha();
echo $filha->revelarSegredo(); // Isso vai funcionar, pois a classe filha tem acesso

```

Links utéis 

[Como não aprender Herança](https://www.alura.com.br/artigos/como-nao-aprender-orientacao-a-objetos-heranca)

Preferindo Composição:
A alternativa a usar herança indiscriminadamente é a composição. Em vez de dizer que um objeto "é um" outro (herança), você faz com que ele "tenha um" (composição). Isso permite que você reutilize o comportamento de outras classes sem herdar métodos indesejados.

Vamos criar uma classe Carro que tem um motor (Motor). Em vez de herdar o motor, o carro terá um motor como parte de sua composição.

```php
<?php

class Motor {
    private $potencia;

    public function __construct($potencia) {
        $this->potencia = $potencia;
    }

    public function ligar() {
        return "Motor de " . $this->potencia . " cavalos ligado!";
    }
}

// Definindo a classe Carro que "tem um" Motor
class Carro {
    private $motor;

    public function __construct(Motor $motor) {
        $this->motor = $motor; // O carro "tem um" motor
    }

    public function ligarCarro() {
        return $this->motor->ligar();
    }
}


$meuMotor = new Motor(150);

// Criando um objeto do tipo Carro, passando o motor
$meuCarro = new Carro($meuMotor);

// Ligando o carro (que internamente liga o motor)
echo $meuCarro->ligarCarro();
?>

```

# Marcar os métodos sobrescritos

No PHP 8.3, foi introduzido o atributo #[Override], que ajuda a tornar o código mais claro e a evitar erros quando estamos sobrescrevendo métodos em uma classe filha.

O que é sobrescrita de métodos?
Quando uma classe filha define um método que tem o mesmo nome de um método da classe mãe, ela está sobrescrevendo esse método. Isso permite que a classe filha tenha um comportamento diferente da mãe para aquele método específico.

Por exemplo, imagine que temos uma classe Animal e uma classe Cachorro que herda de Animal. Se Animal tem um método falar(), o Cachorro pode sobrescrever esse método para ter um comportamento diferente.


# Attributes

Atributos em PHP, também conhecidos como annotations, são uma maneira de adicionar metadados ao seu código. Esses metadados são como "informações extras" que você pode associar a classes, métodos, propriedades ou parâmetros, e podem ser usados por bibliotecas ou frameworks para alterar o comportamento ou adicionar funcionalidades sem modificar diretamente o código.

Os atributos foram introduzidos no PHP 8 e são uma forma mais moderna e flexível de trabalhar com anotações, que antes eram feitas nos comentários do código. Agora, eles são parte da linguagem e mais eficientes.

Os atributos são escritos entre colchetes (#[ ]) e ficam logo antes de uma classe, método ou propriedade. Eles servem para "informar" algo especial sobre aquele elemento. Você pode pensar neles como "rótulos" que fornecem mais informações ou instruções.

#### Exemplos de atributos com parametros 

```php
class Usuario {
    #[Coluna("nome_usuario", tipo: "string")] //Attribute
    public string $nome;
}

```
Para que servem os atributos?

- Frameworks e bibliotecas: Muitos frameworks PHP, como Symfony e Doctrine, utilizam atributos para mapear classes e métodos a funcionalidades especiais. Por exemplo, no Doctrine, os atributos podem ser usados para definir o mapeamento de uma classe para uma tabela de banco de dados.

- Testes: Alguns frameworks de testes podem usar atributos para marcar métodos de teste ou configurar comportamentos especiais.

- Validação: Atributos podem ser usados para definir regras de validação de dados diretamente nos atributos de uma classe, tornando o código mais limpo e intuitivo.

Como acessar os atributos?

Você pode usar a Reflection API do PHP para ler os atributos e tomar ações com base neles. Aqui está um exemplo simples de como acessar os atributos:

```php
$refClass = new ReflectionClass(Exemplo::class);
$method = $refClass->getMethod('meuMetodo');
$attributes = $method->getAttributes();

foreach ($attributes as $attribute) {
    echo $attribute->getName(); // Isso vai imprimir "MeusAtributos"
}

```
#### Reflectiopn API 
A Reflection API em PHP é um conjunto de ferramentas que permite inspecionar e manipular classes, objetos, métodos, propriedades e outras estruturas de código em tempo de execução. Com a Reflection API, você pode explorar o código de forma dinâmica, permitindo que seu programa descubra e interaja com as estruturas de outras classes ou até com ele mesmo.

Para que serve a Reflection API?
A Reflection API é usada para obter informações detalhadas sobre o código sem precisar conhecê-lo de antemão. Isso é útil em situações onde você precisa lidar com código de terceiros, bibliotecas, frameworks, ou até para construir ferramentas como geradores automáticos de documentação, frameworks de testes, ou sistemas de mapeamento objeto-relacional (ORM).


#### Classes abstratas 

- **Métodos abstratos**: São métodos que são declarados, mas não têm implementação. As classes filhas são obrigadas a implementar esses métodos.
- **Não podem ser instanciadas**: Você não pode criar objetos diretamente de uma classe abstrata. Apenas de suas subclasses.
- Uma **classe abstrata** descreve como outras classes devem ser,
 mas você não pode criar objetos diretamente dessa classe.
 

#### Traits 

**Traits** em PHP são uma maneira de reutilizar código entre várias classes, permitindo que você compartilhe métodos sem a necessidade de herança.

-  Elas ajudam a evitar duplicação de código.

```php
<?php

trait AcoesComuns {
    public function mover() {
        return "Estou me movendo!";
    }

    public function emitirSom() {
        return "Estou fazendo barulho!";
    }
}

// Usando a trait em diferentes classes
class Cachorro {
    use AcoesComuns;
}

class Gato {
    use AcoesComuns; 
}

// Criando instâncias e chamando os métodos
$cachorro = new Cachorro();
echo $cachorro->mover();      
echo $cachorro->emitirSom();  
$gato = new Gato();
echo $gato->mover();          
echo $gato->emitirSom();     

?>

```

Links Utéis Traits <br>
[Conflict Resolution](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)


[Namespaces](https://www.php.net/manual/en/language.namespaces.php)

