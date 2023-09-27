function lerURL(URL) {
    var http = new XMLHttpRequest();
    http.open("GET", URL, false);
    http.send();
    return http.responseText;
}
function somar() {
    let hitCount = lerURL('../sas44fAe778A/count.txt');
    hitCount++;
    escreverArquivo(hitCount)
}