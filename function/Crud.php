<?php

class Crud {
	private $mysqli;
	public function __construct($connection){
		$this->mysqli = $connection;
	}

	public function insert($table, $rows = null) {
		$db = $this->mysqli->connection;
		$sql = "INSERT INTO $table";
		$row = null;
		$value = null;
		foreach ($rows as $key => $nilai) {
			$row .= ",".$key;
			$value .= ",'".$nilai."'";
		}
		$sql .= "(".substr($row, 1).")";
		$sql .= " VALUES(".substr($value, 1).")";
		$query = $db->prepare($sql) or die($db->error);
		$query->execute();

	}

	public function show($table, $where= null) {
		$db = $this->mysqli->connection;
		$sql = "SELECT * FROM $table";
		if ($where != null) {
			$sql .= " WHERE $where";
		}
		$query = $db->query($sql) or die($db->error);
		return $query->fetch_all(MYSQLI_BOTH);
	}
	public function allData( $where= null) {
		$db = $this->mysqli->connection;
		$sql = "SELECT * FROM user INNER JOIN divisi ON user.id_divisi = divisi.id_divisi INNER JOIN surat ON user.id_user = surat.id_user";
		if ($where != null) {
			$sql .= " WHERE $where";
		}
		$sql .= " ORDER BY surat.id_surat DESC";
		$query = $db->query($sql) or die($db->error);
		return $query->fetch_all(MYSQLI_BOTH);
	}
	public function lastest( $where= null) {
		$db = $this->mysqli->connection;
		$sql = "SELECT * FROM user INNER JOIN divisi ON user.id_divisi = divisi.id_divisi INNER JOIN surat ON user.id_user = surat.id_user";
		if ($where != null) {
			$sql .= " WHERE $where";
		}
		$sql .= " ORDER BY surat.id_surat DESC LIMIT 5";
		$query = $db->query($sql) or die($db->error);
		return $query->fetch_all(MYSQLI_BOTH);
	}
	public function showData($table, $where= null) {
		$db = $this->mysqli->connection;
		$sql = "SELECT * FROM $table";
		if ($where != null) {
			$sql .= " WHERE $where";
		}
		$query = $db->query($sql) or die($db->error);
		return $query->fetch_array(MYSQLI_BOTH);
	}
	public function showCustom($custom, $table,$table2,$on ,$where = null) {
		$db = $this->mysqli->connection;
        $sql = "SELECT $custom FROM $table INNER JOIN $table2 ON $on";
        if($where !=null){
            $sql .= " WHERE $where";
        }
        $query = $db->query($sql) or die($db->error);
        return $query->fetch_all(MYSQLI_BOTH);
    }

	public function delete($table, $where){
		$db = $this->mysqli->connection;
		$sql = "DELETE FROM $table WHERE $where";
		print_r($sql);
		$query = $db->query($sql) or die($db->error);
	}

	public function update($table, $fild = null, $where = null) {
		$db = $this->mysqli->connection;
		$sql = "UPDATE $table SET";
		$set = null;
		foreach ($fild as $key => $value) {
			$set .= ", ".$key." = '".$value."'";
		}
		$sql .= substr($set, 1). " WHERE $where";
		$query = $db->query($sql) or die($db->error());

	}
	public function hitung($table, $where= null) {
		$db = $this->mysqli->connection;
		$sql = "SELECT COUNT(*) AS jumlah FROM $table";
		if ($where != null) {
			$sql .= " WHERE $where";
		}
		$query = $db->query($sql) or die($db->error);
		return $query->fetch_all(MYSQLI_BOTH);
	}


}

?>