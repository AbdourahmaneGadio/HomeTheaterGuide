<?php

	/*Connexion à la base de données*/
	require 'connexionBD.php';


    /*Prix Min*/
	$prixMin = $_POST['selectionPrixMin'];
	
	/*Prix Max*/
	$prixMax = $_POST['selectionPrixMax'];


    // Si le formulaire n'a pas été rempli
	if ( !isset($prixMin, $prixMax) ) {

		// Données non reçues
		exit('Please fill both the email and password fields!');

	} // if Vérification formulaire

    echo "console.log($prixMin)";
	
	/*Requête SQL pour vérifier dans la BD*/
	$query = 'SELECT nom from enceintes WHERE prix >= ? AND prix <= ?';



	/*Exécution de la requête*/
	$stmt = $con->prepare($query);
    $stmt->bind_param('ss', $prixMin, $prixMax);
	$stmt->execute();

    // Stocke le résultat pour qu'on puisse vérifier si l'enceinte correspond
	$stmt->store_result();

    // Si au moins une enceinte correspond
    if ($stmt->num_rows > 0) {

        
        $nombreLignes = mysqli_stmt_num_rows($stmt);
        
        header("Location: ../index.php?valide=1&nombreLignes=".$nombreLignes."");
        exit();

    }

    // Aucune ne correspond
    else {

        header("Location: ../index.php?valide=0");
        exit();
    }
			
?>