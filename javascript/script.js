//Affiche le prix minimum choisi

function afficherPrixMin(){
    var selectionPrixMin = document.getElementById("selectionPrixMin");
    var valeurPrixMin = document.getElementById("valeurPrixMin");

    selectionPrixMin.oninput=
    function(){
        valeurPrixMin.innerHTML = this.value;
    }
}



//Affiche le prix maximum choisi

function afficherPrixMax(){
    var selectionPrixMax = document.getElementById("selectionPrixMax");
    var valeurPrixMax = document.getElementById("valeurPrixMax");

    selectionPrixMax.oninput=
    function(){
        valeurPrixMax.innerHTML = this.value;
    }
}

