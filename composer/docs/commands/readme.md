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
    "name": "cviniciussdias/buscador-cursos",
    "description": "Projeto que busca os cursos no site da Alura",
    "type": "library",
    "authors": [
        {
            "name": "Vinicius Dias",
            "email": "carlosv775@gmail.com"
        }
    ],
    "require": {}
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
  { “autoload”: { “psr-4”: { “Alura\\Namespace\\Padrao\\”: “src/php/code/” } } }
  ```
