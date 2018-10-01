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
var PAGE_URL=document.location;
var PAGE_IDENTIFIER=PAGE_URL;
var title=document.title;


    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */

    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
        var d = document, s = d.createElement('script');
        
        s.src = 'https://hackergaucho.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
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
