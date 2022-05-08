<?php 
	// Change this to your connection info.
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'homeCinema';
	
	$dsn = 'mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME;
	
	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
	
	/* Connection inside a try/catch block. */
	try
	{  
	   /* PDO object creation. */
	   $pdo = new PDO($dsn, $DATABASE_USER,  $DATABASE_PASS);
	   
	   /* Enable exceptions on errors. */
	   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
	   /* If there is an error, an exception is thrown. */
	   echo 'Database connection failed.';
	   die();
	}
?>