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
        <form action="php/criteresEnceintes.php"
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
                        oninput="afficherPrixMin()"
                        value="0"
                        min="0" 
                        max="600">

                        <p id="valeurPrixMin">0</p>

                        <!--Prix Maximum-->
                        <input type="range" 
                        id="selectionPrixMax" 
                        name="selectionPrixMax" 
                        oninput="afficherPrixMax()"
                        value="600"
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

            <input type="submit" 
            value="OK" />

        </form>
        
        <h2>Enceintes possibles :</h2>

        <!--Enceintes compatibles avec la recherche-->
        <table id="tableEnceintes">


            <?php

                if(isset($_GET['valide'])){

                    if($_GET['valide'] == 0)
                        echo 'Aucune enceinte correspondante';

                    else{

                        echo 
                        '<tr>
                            <td>Enceintes</td>
                            <td>Nom</td>
                            <td>Prix</td>
                            <td>Couleur</td>
                            <td>Type</td>
                        </tr>';

                        if(isset($_GET['nombreLignes'])){


                            $lignes = $_GET['nombreLignes'];
                            
                            for($indice=0; $indice<$lignes; $indice++){
                                echo 
                                '<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>';
                            }

                        }

                    }

                }

            ?>


        </table>

        <br>



        <footer>

            GADIO Abdourahmane - Tous Droits Réservés @ 2022

        </footer>

    </body>


</html>