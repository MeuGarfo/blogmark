# Menu switch em Shell Script

Esse é o script de menu que criei para uma [versão antiga](https://github.com/MeuGarfo/blog) do Hacker Gaucho.

Ele basicamente exibe um menu de opções e recebe parametros via linha de comando.

Sei que não é um [Artisan](https://laravel.com/docs/5.7/artisan) mas ele cumpre bem sua função.


```
#!/bin/bash
php=`which php`

superUser()
{
    touch ../offline
    clear
    echo "criando super usuário..."
    $php bin/superUser.php
    rm ../offline
}

clear

if [ -z "$1" ]
    then
        echo "Digite a opção:"
        echo "1) criar super usuário (default)"
        printf "Opção número "
        read opt
    else
        opt=$1
fi

case $opt
in
    1) superUser ;;
    *) superUser ;;
esac
```
