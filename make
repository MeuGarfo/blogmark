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
rm *.html
rm -rf asset
wget -erobots=off -r --no-parent --html-extension --no-check-certificate "http://hg.local"
wget -erobots=off -r --no-parent --html-extension --no-check-certificate "http://hg.local/404.html"
mv hg.local/* $PWD
rm -rf hg.local
git add -A
git commit -m "$(git status --porcelain)"
git push origin master
cd ..
git add -A
git commit -m "$(git status --porcelain)"
git push origin master
weex -fr hg
