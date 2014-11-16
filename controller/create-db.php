<?php
	require_once(__DIR__ . "/../model/config.php");
	//direct connection

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
