<?php
	require_once(__DIR__ . "/../model/database.php");
	//direct connection

	$connection = new mysqli($host, $username, $password);
	//connection to mysqli with the host, username, and password.

	if($connection->connect_error) {
		die("<p>Error: " . $connection->connect_error . "</p>");
		//if there is an error, it will say to check for an error.
	}
	
	$exists = $connection->select_db($database);
	//if the variables exist, it will do the connection to database.

	if(!$exists) {
		$query = $connection->query("CREATE DATABASE $database");
		if($query) {
			echo "<p>Successfully created database: " . $database . "</p>";
			//this is an if/else statement and if I have not created the variable $datatbase, it will say "CREATE DATABASE $database".
			//If I do create the variable database, than it will say "Successfully created database".
		}
	}
	else {
		echo "<p>Database already exists.</p>";
		//If the databse is already made, than it will say "Database already exists".
	}

	$query = $connection->query("CREATE TABLE posts ("
			. "id int(11) NOT NULL AUTO_INCREMENT,"
			. "title varchar(255) NOT NULL,"
			. "post text NOT NULL,"
			. "PRIMARY KEY (id))");
			//Thecommand query creates a table and the table is called posts.
			//And in the table posts, it has the id, the title,and thet post.

	if($query) {
		echo "<p>Successfully created table: posts</p>";
	}
	else {
		echo "<p>$connection->error</p>";
	}

	$connection->close();
?>