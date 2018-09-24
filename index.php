<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'inc/segment.php';
$segment=segment();
if(@$segment[1]=='/'){
    gerarHtml('index');
}elseif(@$segment[1]=='asset'){
    $asset=@$segment[2];
    gerarAsset($asset);
}else{
    gerarHtml(@$segment[1]);
}

function gerarAsset($nomeDoArquivo){
    $nomeDoArquivo=urldecode($nomeDoArquivo);
    $nomeDoArquivo=@explode('?',$nomeDoArquivo)[0];
    $nomeDoArquivo='asset/'.$nomeDoArquivo;
    if(file_exists($nomeDoArquivo)){
        print file_get_contents($nomeDoArquivo);
    }else{
        gerarHtml('404');
    }
}

function gerarHtml($nomeDoArquivo){
    $nomeDoArquivo=urldecode($nomeDoArquivo);
    $nomeDoArquivo=@explode('.html',$nomeDoArquivo)[0];
    require 'vendor/autoload.php';
    $ParsedownObj = new Parsedown();
    $nomeDoArquivo=$nomeDoArquivo.'.md';
    if(!file_exists($nomeDoArquivo)){
        $nomeDoArquivo='404.md';
    }
    $filenameStr=$nomeDoArquivo;
    $markdownStr=file_get_contents($filenameStr);
    $content=$ParsedownObj->text($markdownStr);
    $title=explode(PHP_EOL,$content)[0];
    $title=strip_tags($title);
    require 'template.php';
}
