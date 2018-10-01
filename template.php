<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php print @$title; ?></title>
    <script src="asset/script4.js"></script>
    <link rel="stylesheet" href="asset/style11.css">
    <link rel="shortcut icon" href="asset/logo180.png" type="image/x-icon" />
</head>
<body>
    <div class="c">
        <div class="r">
            <div class="g3">
                <a href="." title="Hacker Gaucho">
                    <img src="asset/logo180.png" alt="Hacker Gaucho">
                </a>
                <center><a href=".">Página inicial</a></center>
                </ul>
            </div>
            <div class="g6">
                <?php print @$content; ?>
                <script>
var url=document.location;
var title=document.title;
var src="https://disqus.com/embed/comments/?base=default&f=hackergaucho&t_i="+url+"&t_u="+url+"&t_e="+title+"&t_d="+title+"&t_t="+title+"&s_o=default";
document.write('<iframe width="100%" height="400" border="0" src="'+src+'"></iframe>');
</script>
</div><!--g6-->
<div class="g3">
    <h4>Categorias</h4>
    <ul>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="php.html">PHP</a></li>
        <li><a href="shell.html">Shell Script</a></li>
    </ul>
</div>
</div><!--r-->
</div>
</body>
</html>
