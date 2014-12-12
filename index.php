<?php
	require_once(__DIR__ . "/controller/login-verify.php");
	require_once(__DIR__ . "/view/header.php");
	//this require once has the connection from here to the folder view to header.php
	if(authenticateUser()) {
		require_once(__DIR__ . "/view/navigation.php");
		//this require once has the connection from here to the folder view to navigation.php
	}
	require_once(__DIR__ . "/controller/create-db.php");
	//direct connection to the database 
	require_once(__DIR__ . "/controller/read-posts.php");
	require_once(__DIR__ . "/view/footer.php");
	//this require once has the connection from here to the folder view to footer.php	
?>
