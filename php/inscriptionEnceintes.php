<?php

	/*Connexion à la base de données*/
	require 'connexionBD.php';

	/*Image de l'enceinte*/
	$imageEnceintes = $_POST['imageEnceintes'];	

    /*Marque de l'enceinte*/
	$marqueEnceintes = $_POST['marqueEnceintes'];

	/*Modèle de l'enceinte*/
	$modeleEnceintes = $_POST['modeleEnceintes'];
	
	/*Prix de l'enceinte*/
	$prixEnceintes = $_POST['prixEnceintes'];

	/*Nom de l'enceinte*/
	$couleurEnceintes = $_POST['couleurEnceintes'];
	
	/*Prix de l'enceinte*/
	$typeEnceintes = $_POST['typeEnceintes'];

	
	/*Requête SQL pour insérer dans la BD*/
	$query = 'INSERT INTO `enceintes`(`image`, `marque`, `modele`, `prix`, `couleur`, `type`) 
	VALUES (:imageEnceintes, :marqueEnceintes, :modeleEnceintes,:prixEnceintes, :couleurEnceintes, :typeEnceintes)';
	
	/*Valeurs à remplacer*/
	$values = [':imageEnceintes' => $imageEnceintes, ':marqueEnceintes' => $marqueEnceintes, ':modeleEnceintes' => $modeleEnceintes, ':prixEnceintes' => $prixEnceintes, 
	':couleurEnceintes' => $couleurEnceintes, ':typeEnceintes' => $typeEnceintes];

	
	/**Requête pour vérifiez si l'enceinte' existe déjà*/
	$verif = 'SELECT modele FROM enceintes WHERE modele = ?';


	/*Exécution de la requête*/
	try
	{
		/**Vérification de l'enceinte dans la base de données*/
		$verifEnceintes=$con->prepare($verif);
		$verifEnceintes->bind_param('s', $modeleEnceintes);
		$verifEnceintes->execute();
		$verifEnceintes->store_result();

		/*Si le compte n'existe pas*/
		if($verifEnceintes->num_rows == 0){

			/**Inscription dans la base de données*/
		
			$res = $pdo->prepare($query);
			$res->execute($values);
		
			header("Location: adminEnceintes.php?inscription=1");
			exit();
		}

		/**Si l'enceinte existe déjà*/
		else{
			header("Location: adminEnceintes.php?inscription=2");
			exit();
		}
	}
	catch (PDOException $e)
	{
	  /*Erreur dans la requête */
	  echo 'Query error.';
	  die();
	  header("Location: adminEnceintes.php?inscription=3");
	  exit();
	}
			
?>