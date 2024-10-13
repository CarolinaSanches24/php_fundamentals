##### Métodos Mágicos 

 O **__call** é acionado quando tentamos chamar um **método que não existe ou que não é acessível** dentro de um objeto. Ele é definido na classe, e a sua função é capturar essas chamadas de métodos "inexistentes" e lidar com elas de alguma forma.

 Aqui está uma explicação simples de como ele funciona:

- Quando ele é acionado?
O método __call é chamado quando um método que não existe é invocado em um objeto.

- Parâmetros do __call:
Ele recebe dois parâmetros:

O nome do método que foi chamado.
Um array com os argumentos passados para aquele método.

- Por que ele é útil?
Ele pode ser útil para capturar erros, criar métodos dinâmicos ou simplesmente para oferecer uma maneira flexível de tratar chamadas inesperadas de métodos.

[Mais metódos mágicos](https://dias.dev/2023-08-11-metodos-magicos-php/)