## Como persistir dados no servidor usando PHP
### O que é persistir
Persisistir é [sinônimo](https://www.sinonimos.com.br/persistir/) de permanecer, conservar-se, manter-se. Ao persistir os dados com PHP eles permanecerão no disco do servidor mesmo após o usuário que gerou os dados ter deixado o site.

### Como persisitir
#### Salvando dados direto no disco
A função [file_put_contents](http://php.net/manual/pt_BR/function.file-put-contents.php) é a maneira mais simples de salvar dados em disco. Abaixo está um exemplo de como ela funciona:
```
<?php
$dados='essa string está guardada no servidor';
$nomeDoArquivo='arquivo';
if(file_put_contents($nomeDoArquivo,$dados)){
    print 'dados salvos com sucesso';
}else{
    print 'erro ao salvar';
}
```
Para recuperar os dados salvos utiliza-se a função [file_get_contents](http://php.net/manual/pt_BR/function.file-get-contents.php) como no exemplo abaixo:
```
<?php
$nomeDoArquivo='arquivo';
if(file_exists($nomeDoArquivo)){
    print file_get_contents($nomeDoArquivo);
}else{
    print 'o arquivo não existe';
}
```

#### Banco de dados
Se você tem um grande volume de dados um banco de dados pode ser de grande ajuda. O PHP suporta vários sistemas de bancos de dados diferentes sendo que o [MySQL](https://www.mysql.com/) é o mais utilizado.

#### Ir para
- [Página inicial](.)
- [Blog](blog.html)
