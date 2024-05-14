function mostraVoce(){
    var menu = document.getElementById("menu");
    var indice = menu.selectedIndex;
    var valore = menu.option[indice].value;
    document.getElementById("ris").innerHTML = "Hai selezionato la voce "+valore;
}


var bottone = document.getElementById("bottone");
bottone.addEventListener("click",mostraVoce)