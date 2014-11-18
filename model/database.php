<?php
	class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
	public $error;
	//weve created global variables that can be accessed through out our databse class.
	//weve set the visibilty and they can only be accessed from the class and we wont be able to access them from anywhere else.
	//That way when we create the new object, these variable would be hidden and no one would be able to modify them.

	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		//we want to store the information within our object that way we have access to it through out our object.
		//we need to assign the information toour global variables.
		$this->connection = new mysqli($host, $username, $password);
		//connection to mysqli with the host, username, and password.

		if($this->connection->connect_error) {
			die("<p>Error: " . $this->connection->connect_error . "</p>");
			//if there is an error, it will say to check for an error.
		}
	
		$exists = $this->connection->select_db($database);
		//if the variables exist, it will do the connection to database.

		if(!$exists) {
			$query = $this->connection->query("CREATE DATABASE $database");
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
	}

	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
		//now we have the new mysqli object and were checking wether or not we have aconnection error.

		if($this->connection->connect_error) {
			//we check wether we can establish a connection and if theres an error we exit our program and output what the error was
			die("<p>Error: " . $this->connection->connect_error . "</p>");
			//if there is an error, it will say to check for an error.
		}
	}

	public function closeConnection() {
		//isset means that its checking if the variable has been set or not.
		//its checking wether or not there is something within that variable.
		//function are speacial coding that we write that can perform operatios over and over.
		//functions can be used to store data and process the data.
		if(isset($this->connection)) {
			$this->connection->close();
		}
	}

	public function query($string) {
		$this->openConnection();

		$query = $this->connection->query($string);

		if(!$query) {
			$this->error = $this->connection->error;
		}

		$this->closeConnection();

		return $query;
	}
	//all of these functions, if we dont put them here, then we would have to repeat the code many times 
	//and it would be alot of the same code.
	//we would be putting like 10-15 lines of the same code everywhere.
}
