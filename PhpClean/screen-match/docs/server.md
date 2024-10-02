#### Create Server local

```bash
php -S localhost:8080 -t public
```


### Info

- Uso de urlencode(): Quando você redireciona para a página de sucesso, urlencode() é utilizado para garantir que os dados do filme sejam corretamente codificados na URL, especialmente se contiverem espaços ou caracteres especiais.

- Chamada do exit() após o header(): Para evitar que o restante do script seja executado após o redirecionamento.

#### O que a função htmlspecialchars() faz?
Conversão de Caracteres Especiais: A função converte caracteres que têm significados especiais em HTML em suas representações seguras. 
< é convertido em &lt;
> é convertido em &gt;
& é convertido em &amp;
" (aspas duplas) é convertido em &quot;
' (aspas simples) é convertido em &apos;


### Terminal interativo 

```bash 
php -a 
```