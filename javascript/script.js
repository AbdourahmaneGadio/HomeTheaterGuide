// Affiche le prix minimum choisi

function afficherPrixMin(){
    var selectionPrixMin = document.getElementById("selectionPrixMin");
    var valeurPrixMin = document.getElementById("valeurPrixMin");

    selectionPrixMin.oninput=
    function(){
        valeurPrixMin.innerHTML = this.value;
    }
}



// Affiche le prix maximum choisi

function afficherPrixMax(){
    var selectionPrixMax = document.getElementById("selectionPrixMax");
    var valeurPrixMax = document.getElementById("valeurPrixMax");

    selectionPrixMax.oninput=
    function(){
        valeurPrixMax.innerHTML = this.value;
    }
}


// Affiche les enceintes selon les critères
function choixEnceintes(){
    var tableEnceintes = document.getElementById("tableEnceintes");

    fetch("json/enceintes.json")
        .then(response => response.json())
        .then(data => {
            var imageEnceinte = data['Jamo_S803']["0"]["Image"];
            var prixEnceinte = data['Jamo_S803']["0"]["Prix"];
            var couleurEnceinte = data['Jamo_S803']["0"]["Couleur"];
            var typeEnceinte = data['Jamo_S803']["0"]["Type"];

            tableEnceintes.innerHTML = 
            "<tr>"
            + "<td><img src=" + imageEnceinte + " width=400></td>"
            + "<td>" + prixEnceinte + "</td>"
            + "<td>"+ couleurEnceinte +"</td>"
            + "<td>" + typeEnceinte + "</td>"
            +"</tr>";
        })
}

