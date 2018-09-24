#!/bin/bash
clear
if [ -z "$1" ]
	then
		echo "Baixando HTML..."
	else
		nano "mark/$1.md"
fi
rm -rf docs
mkdir -p docs
cd docs
git init && git remote add origin git@github.com:hackergaucho/hackergaucho.github.io.git
git pull origin master
rm asset/*.*
rm *.html
wget -r --no-parent --html-extension --no-check-certificate --convert-links "http://hg.local"
mv hg.local/* $PWD
git add -A
git commit -m "$(git status --porcelain)"
git push origin master
