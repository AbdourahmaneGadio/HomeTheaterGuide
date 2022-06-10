<html>

    <head>

        <meta charset="UTF-8">

        <meta name="description" content="Home Theater Guide">

        <meta name="keywords" content="HTML, CSS, JavaScript">

        <meta name="author" content="Abdourahmane Gadio">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home Theater Guide - Admin</title>

        <link rel="stylesheet" href="../css/style.css">

    </head>

    <body>
        <h1>Ajouter une enceinte</h1>

        <form action="inscriptionEnceintes.php"
            method="post">

            <!--Image Enceintes-->
            <input type="file"
            id="imageEnceintes" 
            name="imageEnceintes" 
            placeholder="Choisissez l'image"
            required
            >
            
            <!--Marque Enceintes-->
            <input type="text"
            id="marqueEnceintes" 
            name="marqueEnceintes" 
            placeholder="Entrer la marque"
            required
            >

            <!--Modèle Enceintes-->
            <input type="text"
            id="modeleEnceintes" 
            name="modeleEnceintes" 
            placeholder="Entrer le modèle"
            required
            >

            <!--Prix Enceintes-->
            <input type="number"
            id="prixEnceintes" 
            name="prixEnceintes" 
            placeholder="Prix"
            min="0"
            max="1200"
            required
            >

            <!--Couleur Enceintes-->
            <select name="couleurEnceintes" 
            id="couleurEnceintes">
                <option value="Blanc">Blanc</option>
                <option value="Noir">Noir</option>
                <option value="Noyer">Noyer</option>
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

        
        <?php
            /*Vérifie si une enceinte a été ajouté*/

            if(isset($_GET['inscription'])){

                if($_GET['inscription'] == 1){
                    echo '<p>Enceinte ajoutée</p>';
                }

                if($_GET['inscription'] == 2){
                    echo '<p>Enceinte déjà existante</p>';
                }

                if($_GET['inscription'] == 3){
                    echo '<p>Erreur dans la requête SQL</p>';
                }
            }

        ?>

        <h1>Supprimer une enceinte</h1>

        <?php
            /*Connexion à la base de données*/
            require 'connexionBD.php';

            /*Requête SQL pour voir la BD*/
            $query = 'SELECT * FROM enceintes';

            /*Exécution de la requête*/
            try
            {
                /**Vérification de l'affichage de la base de données*/
                $stmt=$con->query($query);
                
                // Si la table n'est pas vide
                if ($stmt->num_rows > 0) {

                    echo '
                    <form name="formTableEnceintes"
                    method="post"
                    action="supprimerEnceintes.php">

                        <table id="tableEnceintes">
                        
                            <tr>
                                <td>Enceintes</td>
                                <td>Nom</td>
                                <td>Prix de la paire</td>
                                <td>Couleur</td>
                                <td>Type</td>
                                <td>Supprimer</td>
                            </tr>';

                        $lignes = $stmt->num_rows;

                        for($indice=0; $indice<$lignes; $indice++){
                                
                            // Les données pour chaque ligne
                            $row = $stmt->fetch_assoc();

                            echo '
                            <tr>
                                <td>
                                    <img src = ../media/'.$row['marque'].'/'.$row['modele'].'/'.$row['image'].'
                                    alt = Image 
                                    width = 100 />
                                </td>
                                <td><p id = "marqueEnceintes">'.$row['marque'].'</p> <p id = "modeleEnceintes">'.$row['modele'].'</p></td>
                                <td>'.$row['prix'].'</td>
                                <td>'.$row['couleur'].'</td>
                                <td>'.$row['type'].'</td>
                                <td>
                                    <input type="submit"
                                    id="boutonSupprimer'.$indice.'" 
                                    name="boutonSupprimer'.$indice.'" 
                                    value="Supprimer" />
                                </td>
                            </tr>';

                    }

                    echo '</table></form>';

                }

                else {
                        echo "<p>Aucune enceinte dans la base de données</p>";
                    
                }
        
                
            }

            catch (PDOException $e)
            {
            /*Erreur dans la requête */
            echo 'Query error.';
            exit();
            }

            
        ?>

        <a href="../index.php">Retour</a>

    </body>

</html>