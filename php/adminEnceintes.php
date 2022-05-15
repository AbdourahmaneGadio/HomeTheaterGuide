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
                $stmt=$con->prepare($query);
                $stmt->execute();
                $stmt->store_result();

                echo '
                <table id="tableEnceintes">
                
                    <tr>
                        <td>Enceintes</td>
                        <td>Nom</td>
                        <td>Prix</td>
                        <td>Couleur</td>
                        <td>Type</td>
                    </tr>';

                $lignes = $stmt->num_rows;

                for($indice=0; $indice<$lignes; $indice++){
                    echo '
                    <tr>
                        <td>.image.</td>
                        <td>.nom.</td>
                        <td>.prix.</td>
                        <td>.couleur.</td>
                        <td>.type.</td>
                    </tr>';
                }
        
                echo '</table>';
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