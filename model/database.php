<?php
	class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
	//weve created global variables that can be accessed through out our databse class.
	//weve set the visibilty and they can only be accessed from the class and we wont be able to access them from anywhere else.
	//That way when we create the new object, these variable would be hidden and no one would be able to modify them.

	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		//we want to store the information within our objectthat way we have access to it through out our object.
		//we need to assign the information toour global variables.
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
		if(isset($this->connection)) {
			$this->connection->close();
		}
	}

	public function query($string) {
		$this->openConnection();

		$query = $this->connection->query($string);

		$this->closeConnection();

		return $query;
	}
	//all of these functions, if we dont put them here, then we would have to repeat the code many times 
	//and it would be alot of the same code.
	//we would be putting like 10-15 lines of the same code everywhere.
}
