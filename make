#!/bin/bash
clear
echo "Digite o nome do arquivo:"
read a
cp template.html "$a.html"
nano "$a.html"
