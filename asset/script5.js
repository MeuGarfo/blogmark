var perf = performance.timing;

function AddDisqus(){
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
}

function Pageloadtime() {
    if (typeof (perf) == 'object') {
        var aftr_loadtime = perf.domComplete;
    }else{
        var aftr_loadtime = new Date().getTime();
    }
    pgloadtime = (aftr_loadtime - before_loadtime) / 1000;
    var bodyElm=document.getElementsByTagName("body")[0];
    var bodyHtml=bodyElm.innerHTML;
    var msgHtml="<center><small>Página carregada em " + pgloadtime + " segundos</small></center>";
    bodyElm.innerHTML = bodyHtml+msgHtml;
}

if (typeof (perf) == 'object') {
    var before_loadtime = perf.connectStart;
}else{
    var before_loadtime = new Date().getTime();
}


window.onload = function(){
    AddDisqus;
    Pageloadtime;
}
