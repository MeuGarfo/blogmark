## Blog em PHP e Markdown
*24set2018*

Conforme [escrevi anteriormente](vida_longa.html) mudei a hospedagem do Hacker Gaucho para o Github Pages. Já que não me interesso por Jekyll nem por Ruby resolvi escrever em PHP um sistema de geração de páginas estaticas a partir do markdown.

![Imagem comparando o blogmark com a versão anterior do Hacker Gaucho](/asset/blogmark.png)

## Convertendo o markdown para HTML
Para converter o markdown para HTML escolhi a biblioteca [erusev/parsedown](https://packagist.org/packages/erusev/parsedown). A conversão para HTML é feita apenas on-the-fly, por isso criei um shell script para baixar através do wget o HTML gerado.

## Publicando no Github
Sabendo que o Github não roda PHP separei o blog em dois repositórios: Um para o [código PHP](https://github.com/hackergaucho/blogmark) e outro para os [arquivos estáticos](https://github.com/hackergaucho/hackergaucho.github.io). O repositório dos arquivos estáticos serviu como base para o [mirror no Geocities](http://geocities.ws/hackergaucho).

#### Ir para
- [Página inicial](.)
- [Blog](blog.html)
