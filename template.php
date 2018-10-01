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
                <div id="disqus_thread"></div>
                <script>
                var disqus_config = function () {
                this.page.url = encodeURIComponent(document.location);
                this.page.identifier = encodeURIComponent(document.location);
            };
    
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://hackergaucho.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

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
