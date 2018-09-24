## Blog em PHP e Markdown
*24set2018*

Conforme [escrevi anteriormente](vida_longa.html) mudei a hospedagem do Hacker Gaucho para o Github Pages. 

Como não me interesso por Jekyll nem por Ruby resolvei escrever em PHP um sistema de geração de páginas estaticas a partir do markdown.
![BlogMark](/asset/blogmark.png)

## Convertendo o markdown para HTML
Como conversor para markdown escolhi a biblioteca [erusev/parsedown](https://packagist.org/packages/erusev/parsedown).

A conversão para HTML é feita apenas on-the-fly, por isso criei um script em shell script que baixa através do wget o HTML gerado.

## Publicando no Github
Infelzimente o Github ainda não roda PHP, por isso tive de usar um repositório adicional apenas para os [arquivos estáticos](https://github.com/hackergaucho/hackergaucho.github.io)

## Código fonte
O código fonte do blog está disponível no endereço https://github.com/hackergaucho/blogmark 
