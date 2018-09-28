var perf = performance.timing;

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
window.onload = Pageloadtime;

