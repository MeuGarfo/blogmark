## Problemas com o Laravel
*26set2018*

> Não existe bala de prata para a web.

Nunca fui fã de frameworks ou de CMSs, acho que o código deles muito engessado, pouco documentado e extenso demais quando comparado a uma biblioteca standalone. 

Hoje tive dois problemas ao tentar rodar o Angular e o Vue no Laravel:
1. Tanto o Angular quanto o Vue não rodaram no modo template pois a sintaxe deles entrou em conflito com a sintaxe do Blade
1. Tentei rodar a versão do Vue que vem integrada ao Laravel mas não consegui


A solução do segundo problema no fim era simples: Bastou atualizar o Node.js para tudo funcionar, porém apesar do Laravel ter um sistema eficiente de exibição de erros no PHP ele foi incapaz de me alertar de forma simples e direta sobre esse problema simples na versão do Node.js.

Antes disso já tinha tido um problema semelhante ao tentar instalar a última versão do Laravel no PHP 7.1. Na ocasião o Laravel também não emitiu qualquer mensagem alertando para a incompatibildiade do framework com a versão do PHP disponível na máquina.

De que adianta usar um framework gigantesco cheio de ferramentas se ele morre se por nada ele deixa de te dar sinal de vida e fica te forçando a adicionar bibliotecas mais simples e intuitivas para conseguir se virar?

#### Ir para
- [Página inicial](.)
- [Blog](blog.html)
