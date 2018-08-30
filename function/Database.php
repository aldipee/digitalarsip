<?php
class Database {
	private $host;
	private $user;
	private $pass;
	private $database;
	public $connection;

	public function __construct($host, $user,$pass, $database){
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->database = $database;

		$this->connection = new mysqli($this->host, $this->user, $this->pass, $this->database) or die($this->connection->error());
	}
}


?>