//https://www.html5rocks.com/en/tutorials/webperformance/basics/
//https://stackoverflow.com/questions/9944170/using-the-new-javascript-performance-timing-api-on-iframes

//var before_loadtime = new Date().getTime();
var perf = performance.timing;
var before_loadtime = perf.connectStart;

function Pageloadtime() {
    //var aftr_loadtime = new Date().getTime();
    var aftr_loadtime = perf.domComplete;
    pgloadtime = (aftr_loadtime - before_loadtime) / 1000;
    var bodyElm=document.getElementsByTagName("body")[0];
    var bodyHtml=bodyElm.innerHTML;
    var msgHtml="<center><small>Página carregada em " + pgloadtime + " segundos</small></center>";
    bodyElm.innerHTML = bodyHtml+msgHtml;
}

//window.onload = Pageloadtime;
window.addEventListener("load", Pageloadtime);
