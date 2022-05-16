<?php

	/*Connexion à la base de données*/
	require 'connexionBD.php';
	
	/*Marque*/
	$marque = $_POST['marqueEnceintes'];

    /*Modele*/
	$modele= $_POST['modeldeEnceintes'];

    $query = "DELETE * FROM enceintes WHERE marque = ? AND modele = ?";
    $stmt=$pdo->prepare($query);
    $stmt->execute([$marque, $modele]);

    header('Location : adminEnceintes.php');
    exit();



?>