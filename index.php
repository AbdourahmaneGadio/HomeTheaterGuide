<html>

    <head>

        <meta charset="UTF-8">

        <meta name="description" content="Home Theater Guide">

        <meta name="keywords" content="HTML, CSS, JavaScript">

        <meta name="author" content="Abdourahmane Gadio">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home Theater Guide</title>

        <link rel="stylesheet" href="css/style.css">

        <script src="javascript/script.js"></script>

    </head>

    <body>

        <h1>Home Theater Guide</h1>

        <a href="php/adminEnceintes.php">Admin</a>

        <h2>Quels enceintes pour vous ?</h2>
        
        <!--Tableau de sélection-->
        <form action=""
        method="post"> 
            
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
                        onclick="afficherPrixMin()"
                        value="0"
                        min="0" 
                        max="3000">

                        <p id="valeurPrixMin">0</p>

                        <!--Prix Maximum-->
                        <input type="range" 
                        id="selectionPrixMax" 
                        name="selectionPrixMax" 
                        oninput="afficherPrixMax()"
                        value="3000"
                        min="0" 
                        max="3000">

                        <p id="valeurPrixMax">3000</p>

                    </td>

                    <!--Couleur-->
                    <td>

                        <select id="selectionCouleur"
                        name="selectionCouleur">

                            <option>Blanc</option>
                            <option>Noir</option>
                            <option>Noyer</option>

                        </select>

                    </td>

                    <!--Type-->
                    <td>

                        <select id="selectionType"
                        name="selectionType">

                            <option>Bibliothèques</option>
                            <option>Colonnes</option>

                        </select>

                    </td>

                </tr>

            </table>

            <input type="submit" 
            value="OK" />

        </form>
        
     
        <!--Tableau enceintes compatibles-->
        <?php
            if(isset($_POST['selectionPrixMin'])){
                include 'php/criteresEnceintes.php';

            }
        ?>

        

        <br>



        <footer>

            GADIO Abdourahmane - Tous Droits Réservés @ 2022

        </footer>

    </body>


</html>