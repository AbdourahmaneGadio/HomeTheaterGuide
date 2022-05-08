<?php

	/*Connexion à la base de données*/
	require 'connexionBD.php';

	
    /*Nom de l'enceinte*/
	$nomEnceintes = $_POST['nomEnceintes'];
	
	/*Prix de l'enceinte*/
	$prixEnceintes = $_POST['prixEnceintes'];

	/*Nom de l'enceinte*/
	$couleurEnceintes = $_POST['couleurEnceintes'];
	
	/*Prix de l'enceinte*/
	$typeEnceintes = $_POST['typeEnceintes'];

	
	/*Requête SQL pour insérer dans la BD*/
	$query = 'INSERT INTO `enceintes`(`nom`, `prix`, `couleur`, `type`) 
	VALUES (:nomEnceintes, :prixEnceintes, :couleurEnceintes, :typeEnceintes)';
	
	/*Valeurs à remplacer*/
	$values = [':nomEnceintes' => $nomEnceintes, ':prixEnceintes' => $prixEnceintes, 
	':couleurEnceintes' => $couleurEnceintes, ':typeEnceintes' => $typeEnceintes];

	
	/**Requête pour vérifiez si l'enceinte' existe déjà*/
	$verif = 'SELECT nom FROM enceintes WHERE nom = ?';


	/*Exécution de la requête*/
	try
	{
		/**Vérification de l'enceinte dans la base de données*/
		$verifEnceintes=$con->prepare($verif);
		$verifEnceintes->bind_param('s', $nomEnceintes);
		$verifEnceintes->execute();
		$verifEnceintes->store_result();

		/*Si le compte n'existe pas*/
		if($verifEnceintes->num_rows == 0){

			/**Inscription dans la base de données*/
		
			$res = $pdo->prepare($query);
			$res->execute($values);
		
			header("Location: ../index.php?inscription=1");
			exit();
		}

		/**Si l'enceinte existe déjà*/
		else{
			header("Location: ../index.php?inscription=2");
			exit();
		}
	}
	catch (PDOException $e)
	{
	  /*Erreur dans la requête */
	  echo 'Query error.';
	  die();
	  header("Location: ../index.php?inscription=3");
	  exit();
	}
			
?>