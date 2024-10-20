json_decode($stringJson, true);


A função **json_decode** vai receber uma string como primeiro parâmetro e transformá-la em um objeto por padrão. Ao passar true como segundo parâmetro, o PHP retornará um array associativo ao invés de um objeto.

Confira alguns exemplos:

- Ler somente uma linha usando a função fgets.
Ler um número determinado de bytes do arquivo através de fread.
Escrever em um arquivo usando fwrite.
Navegar no arquivo para uma posição específica com fseek.
Todas essas funções possuem como parâmetro uma variável do tipo resource, que nesse caso é uma espécie de ponteiro para o arquivo. Para termos esse ponteiro, utilizamos a função fopen que abre um arquivo para leitura, escrita ou ambos, dependendo dos modos de abertura que informarmos por parâmetro.

No curso anterior nós utilizamos a função fgets para ler uma entrada do terminal passando STDIN por parâmetro. STDIN é uma constante que possui o recurso já aberto para leitura apontando para a entrada padrão do processo, que é o terminal.

A manipulação de arquivos, assim como de strings e de arrays, é possível através de diversas funções fornecidas pelo PHP. Você pode conferir na documentação a lista de funções do sistema de arquivos.

É importante ressaltar que essas funções podem ser utilizadas não somente em arquivos. Ao realizar file_get_contents('http://example.org'), por exemplo, realizamos uma requisição HTTP para o endereço passado por parâmetro. Isso é possível graças ao conceito de stream wrappers no PHP.

