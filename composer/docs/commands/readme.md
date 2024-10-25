### Run Project 
``` shell

```
### Enviando seus pacotes

[Packagit](https://packagist.org/packages/submit)

### Create project with composer

Instalação no Mac/Linux
Acesse o site https://getcomposer.org e vai para a página do Download. Copie o script de instalação e cole no seu terminal para instalar o composer.

Depois de executar o script, mova o arquivo composer.phar (sem a extensão) para uma pasta disponível em seu PATH (/usr/local/bin, por exemplo). Resultado: /usr/local/bin/composer

Primeiro projeto
1) No seu editor de código favorito crie um novo projeto.

2) Na linha de comando entre na pasta do projeto e digite:
   
```bash
composer init 
```
Use as seguinte informações:

Package Name: seu-nickname/buscador-cursos
Description: Projeto que busca cursos no site da alura
Author: Seu Nome
Minimum Stability: deixa em branco
Package Type: library
License: deixa em branco
E nas duas perguntas sobre as dependências digite no. Por fim, confirma a geração do arquivo composer.json:

```json
{
  "name": "CarolinaSanches24/php_fundamentals",
  "description": "Simples buscador de cursos",
  "type": "library",
  "license": "GPL-3.0-or-later",
  "authors": [
    {
      "name":"Carol Sanches",
      "email": "carolmosilva34@gmail.cpm"
    }
  ],
  "autoload": {
    "files":[
      "functions.php"
    ],
    "psr-4": {
      "CarolinaSanches24\\SearchCourse\\":"search"
    }
  }
```

### Autoload 

O Composer consiga realizar o autoload de todos os pacotes em um único código.

- Principais pontos da PSR-4
- Todos os arquivos devem ter como seu nome o nome da classe contida nele e a extensão .php
- Cada um dos namespaces após o **vendor namespace** deve ser mapeados para uma estrutura de diretórios
  Exemplo 1: Restaurante\Namespace\Padrao está mapeado para /src/php/code, a classe Restaurante\Namespace\Padrao\Comidas\Sobremesas deve estar no caminho /src/php/code/Comidas/Sobremesas.php.

### Como implementar a PSR4

- Basta adicionar na chave psr-4 filha da chave autoload a chave contendo nosso vendor namespace e o valor contendo nossa pasta base:

Exemplo:
  ```json
 { “autoload”: { “psr-4”: { “ Restaurante\\Namespace\\Padrao\\”: “src/php/code/” } } }
  ```
### Projeto legados 

Projetos legados que não implementam a PSR-4 em sua estrutura de arquivos e possivel utilizar um autoload 
Com a chave **classmap** conseguimos informar arquivos que contenham classes para que o Composer as encontre mesmo que não sigam a PSR-4.

```json
{
    "autoload": {
        "classmap": ["src/", "lib/", "Something.php"]
    }
}
```
Para atualizar o arquivo autoload.php baseado no composer.json, podemos rodar o comando

```bash
 composer dumpautoload
```

Para carregar um biblioteca de funções automaticamente, podemos adicionar uma entrada files no composer.json

##### 

Através do flag --dev definimos que uma dependência não faz parte do ambiente de produção

```bash
composer require --dev <nome do pacote>
```
Caso desejarmos baixar as dependências de "produção" apenas podemos usar o flag no-dev

```bash
composer install --no-dev
```

Arquivos executáveis fornecidos por componentes instalados pelo composer ficam na pasta vendor/bin

Ferramentas do mundo PHP:
- phpunit para rodar testes;
- phpcs para verificar padrões de código;
- phan para executar uma análise estática da sintaxe do nosso código.
