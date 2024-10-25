#### Como posso instalar um pacote utilizando o Composer?
- Executando o comando composer require <pacote>
- Adicionando no item require do composer.json e executando o comando composer update
#### Qual o propósito do arquivo autoload
- o Composer faz o trabalho necessário para definir um autoload de classes de forma que seja possível utilizar as dependências sem incluir seus arquivos separadamente.

Alternativa correta


Alternativa correta

#### Install PHPCodeSniffer

``` shell
composer require --dev squizlabs/php_codesniffer

```
#### Acessando painel de comandos

```shell
D:\Projects\php_fundamentals\composer> vendor\bin\phpcs --help
```
#### Identificando possiveis erros de sintaxe

```shell
D:\Projects\php_fundamentals\composer> vendor\bin\phpcs --standard=PSR12 search\src\
```

#### Install Phan

```shell
composer require --dev phan\phan
```
#### Acessando comandos disponíveis
```shell
D:\Projects\php_fundamentals\composer> vendor\bin\phan --help
```

#### Análisando código

```shell
vendor\bin\phan --allow-polyfill-parser search\src\functions.php

```
#### Crie o arquivo de configuração do phan
![alt text](image.png)

### Install PhpUnit
```shell
composer require --dev phpunit/phpunit

```
### Como executar testes phpUnit

```shell
vendor\bin\phpunit Tests\SearchCourses.php
```

### Configurando Scripts no Composer JSON

```json
"scripts": {
    "test": "phpunit Tests\\SearchCoursesTest.php",
    "cs": "phpcs --standard=PSR12 src/"

    }
```

#### Criando script de scripts
```json
"scripts": {
    "test": "phpunit Tests\\SearchCoursesTest.php",
    "cs": "phpcs --standard=PSR12 src/"

    },
    "check":[
        
        "@phan",
        "@cs",
        "@test",
    ]
```

### Run Scripts 

```shell
composer check
```

#### Adicionando descrição a um script

```json
 "scripts-descriptions": {
        "check":"Run verify code PHAN,PHPCS,PHUNIT "
    }
```

### Buscar atualizações
```
composer update
```

### Rodar um script pos atualização

```json
  "post-update-cmd": [
            "@test"
        ]
```
[Composer Scripts Documentation](https://getcomposer.org/doc/articles/scripts.md)
