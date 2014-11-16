<?php 
	require_once(__DIR__ . "/database.php");

	$path = "/phpproject/";
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";
	//stores all of the variables

	$connection = new Database($hodt, $username, $password, $database);

	//a new object and the new oblect is gonna be of type database.