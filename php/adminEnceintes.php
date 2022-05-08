<html>

    <head>
    </head>

    <body>
        <h1>Ajouter une enceinte</h1>

            <form action="inscriptionEnceintes.php"
            method="post">
            
            <!--Nom Enceintes-->
            <input type="text"
            id="nomEnceintes" 
            name="nomEnceintes" 
            placeholder="Entrer le nom des enceintes"
            required
            >

            <!--Prix Enceintes-->
            <input type="number"
            id="prixEnceintes" 
            name="prixEnceintes" 
            placeholder="Entrer le prix de la paire d'enceintes"
            min="0"
            max="600"
            required
            >

            <!--Couleur Enceintes-->
            <select name="couleurEnceintes" 
            id="couleurEnceintes">
                <option value="Blanc">Blanc</option>
                <option value="Noir">Noir</option>
            </select>

            <!--Type Enceintes-->
            <select name="typeEnceintes" id="typeEnceintes">
                <option value="Bibliothèques">Bibliothèques</option>
                <option value="Colonnes">Colonnes</option>
            </select>

            <input type="submit"
            value ="OK"
            >

        </form>

        <a href="../index.php">Retour</a>

    </body>

</html>