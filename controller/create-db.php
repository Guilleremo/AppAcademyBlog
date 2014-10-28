<?php
	require_once(__DIR__ . "/../model/database.php");
	//direct connection

	$connection = new mysqli($host, $username, $password);
	//connection to mysqli with the host, username, and password.

	if($connection->connect_error) {
		die("Error: " . $connection->connect_error);
		//if there is an error, it will say to check for an error.
	}
	
	$exists = $connection->select_db($database);
	//if the variables exist, it will do the connection to database.

	if(!$exists) {
		$query = $connection->query("CREATE DATABASE $database");
		if($query) {
			echo "Successfully created database; " . $database;
			//this is an if/else statement and if I have not created the variable $datatbase, it will say "CREATE DATABASE $database".
			//If I do create the variable database, than it will say "Successfully created database".
		}
	}
	else {
		echo "Database already exists.";
		//If the databse is already made, than it will say "Database already exists".
	}


	$connection->close();
?>