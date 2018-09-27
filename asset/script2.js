//var before_loadtime = new Date().getTime();
var before_loadtime = performance.timing.connectStart;

function Pageloadtime() {
    var aftr_loadtime = new Date().getTime();
    pgloadtime = (aftr_loadtime - before_loadtime) / 1000
    var bodyElm=document.getElementsByTagName("body")[0];
    var bodyHtml=bodyElm.innerHTML;
    var msgHtml="<center><small>Página carregada em " + pgloadtime + " segundos</small></center>";
    bodyElm.innerHTML = bodyHtml+msgHtml;
}

//window.onload = Pageloadtime;
window.addEventListener("load", Pageloadtime);
