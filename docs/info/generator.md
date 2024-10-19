#### O que são Generators?

Em PHP, generators são uma maneira simples de implementar iteradores sem a necessidade de criar uma classe que implemente a interface Iterator. Eles **permitem que você crie funções que podem ser pausadas e retomadas**, o que é útil para trabalhar com grandes conjuntos de dados ou streams contínuos, pois você pode economizar memória gerando valores sob demanda em vez de carregar tudo na memória de uma vez.

Como funciona:

Ao invés de usar return para retornar um valor e encerrar a função, um generator usa a palavra-chave **yield**. Quando a função é chamada, ela não executa completamente. Em vez disso, ela retorna um objeto do tipo Generator, que pode ser iterado. Cada vez que o yield é encontrado, o valor é "pausado" e pode ser recuperado ao iterar sobre o generator.

Vantagens:

Eficiência de Memória: Em vez de gerar todos os valores de uma vez e armazená-los em um array, um generator gera um valor por vez, economizando memória.
Execução Sob Demanda: Valores são gerados apenas quando solicitados, o que é útil quando você está lidando com grandes volumes de dados.
Pausar e Retomar: Com yield, você pode pausar a execução da função e retomá-la no ponto em que parou, mantendo o estado entre as pausas.
