<html>

    <head>

        <title>Home Theater Guide</title>

        <link rel="stylesheet" href="css/style.css">

        <script src="javascript/script.js"></script>

    </head>

    <body>

        <h1>Home Theater Guide</h1>

        <h2>Quels enceintes pour vous ?</h2>
        
        <!--Tableau de sélection-->
        <table>

            <tr>

                <td>Prix (Minimum et Maximum)</td>
                <td>Couleur</td>
                <td>Type</td>

            </tr>

            <tr>

                <!--Prix-->
                <td>

                    <!--Prix Minimum-->
                    <input type="range" 
                    id="selectionPrixMin" 
                    name="selectionPrixMin" 
                    oninput="afficherPrixMin()"
                    min="0" 
                    max="600">

                    <p id="valeurPrixMin">0</p>

                    <!--Prix Maximum-->
                    <input type="range" 
                    id="selectionPrixMax" 
                    name="selectionPrixMax" 
                    oninput="afficherPrixMax()"
                    min="0" 
                    max="600">

                    <p id="valeurPrixMax">600</p>

                </td>

                <!--Couleur-->
                <td>

                    <select id="selectionCouleur">

                        <option>Blanc</option>
                        <option>Noir</option>
                        <option>Noyer</option>

                    </select>

                </td>

                <!--Type-->
                <td>

                    <select id="selectionType">

                        <option>Bibliothèques</option>
                        <option>Colonnes</option>

                    </select>

                </td>

            </tr>

        </table>

        <p id="recomEnceintes"></p>



        <footer>

            GADIO Abdourahmane - Tous Droits Réservés @ 2022

        </footer>

    </body>


</html>