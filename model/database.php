<?php
	class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
}
//weve created global variables that can be accessed through out our databse class.
//weve set the visibilty and they can only be accessed from the class and we wont be able to access them from anywhere else.
//That way when we create the new object, these variable would be hidden and no one would be able to modify them.