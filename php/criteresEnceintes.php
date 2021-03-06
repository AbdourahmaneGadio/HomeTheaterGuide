<?php

	/*Connexion à la base de données*/
	require 'connexionBD.php';


    /*Prix Min*/
	$prixMin = $_POST['selectionPrixMin'];
	
	/*Prix Max*/
	$prixMax = $_POST['selectionPrixMax'];

    // Couleur
    $couleur = $_POST['selectionCouleur'];

    // Type
    $type = $_POST['selectionType'];


    // Si le formulaire n'a pas été rempli
	if ( !isset($prixMin, $prixMax) ) {

		// Données non reçues
		exit('Please fill both the email and password fields!');

	} // if Vérification formulaire

	
	/*Requête SQL pour vérifier dans la BD*/
	$query = 'SELECT * from enceintes WHERE prix > ? AND prix < ?
    AND couleur = ? AND type = ?';

    try{

        /*Exécution de la requête*/
        $stmt=$pdo->prepare($query);
        $stmt->execute([$prixMin, $prixMax, $couleur, $type]);
        

        // Si la table n'est pas vide
        if ($stmt->rowCount() != 0) {

            echo '
            <table id="tableEnceintes">
                        
                <tr>
                    <td>Image</td>
                    <td>Nom</td>
                    <td>Prix de la paire</td>
                    <td>Couleur</td>
                    <td>Type</td>
                </tr>';

            while($row = $stmt->fetch()){
                                

                echo '
                <tr>
                    <td>
                        <img src = media/'.$row['marque'].'/'.$row['modele'].'/'.$row['image'].'
                        alt = Image '.$row['marque'].' '.$row['modele'].'
                        width = 200 />
                    </td>
                    <td>'.$row['marque'].' '.$row['modele'].'</td>
                    <td>'.$row['prix'].'</td>
                    <td>'.$row['couleur'].'</td>
                    <td>'.$row['type'].'</td>
                </tr>';

            }

            echo '</table>';

        }

        else {
                echo "<p>Aucune enceinte correspondante</p>";             
        }

    }

    catch (PDOException $e)
    {
    /*Erreur dans la requête */
    echo 'Query error.';
    exit();
    }
 
			
?>