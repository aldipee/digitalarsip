<?php

class Login {
	// function cek_user($username) {
	// 	global $link;
	// 	$sql = "SELECT username FROM user WHERE username='$username'";
	// 	if ($result = mysqli_query($link, $sql)) {
	// 		if (mysqli_num_rows($result) != 0 ) {
	// 			return true;
	// 		}else {
	// 			return false;
	// 		}
	// 	}else {
	// 		return false;
	// 	}
	// }

	// function login($username, $password) {
	// 	global $link;
	// 	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	// 	if ($result = mysqli_query($link, $sql)) {
	// 		if (mysqli_num_rows($result) == 1) {
	// 			return true;
	// 		}else {
	// 			return false;
	// 		}
	// 	}else {
	// 		return false;
	// 	}
	// }
	private $mysqli;
	public function __construct($connection){
		$this->mysqli = $connection;
	}

	public function cek_user($username) {
			$db = $this->mysqli->connection;
			$sql = "SELECT username FROM user WHERE username='$username'";
			$result = $db->query($sql) or die($db->error());
			if ($result->num_rows != 0) {
				return true;
			}else {
				return false;
			}
	}
	public function login($username, $password) {
			$db = $this->mysqli->connection;
			$password = mysqli_real_escape_string($db, $password);
			$username = mysqli_real_escape_string($db, $username);
			$sql = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
			$result = $db->query($sql);
			if ($result->num_rows == 1) {
				return true;
			}else {
				return false;
			}
	}
	public function id($username){
		$db = $this->mysqli->connection;
		$sql = "SELECT * FROM user";
		if ($where != null) {
			$sql .= " WHERE $username ";
		}
		$query = $db->query($sql) or die($db->error);
		return $query->fetch_all(MYSQLI_BOTH);
	}
}

?>