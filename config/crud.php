<?php
class CRUD {
    public $connection;
    public  function __construct($hostname,$username,$password,$database){
        $this->connection = new mysqli($hostname,$username,$password,$database);
    }
    public function insert($table,$rows = null){
        $sql = "INSERT INTO $table";
        $row = null;
        $value = null;
        foreach($rows as $key => $nilai){
            $row .= ",".$key;
            $value .=  ",'".$nilai."'";
        }
        $sql .= "(".substr($row,1).")";
        $sql .= " VALUES(".substr($value,1).")";
        $query = $this->connection->prepare($sql) or die($this->connection->error);
        $query->execute();
    }

    public function show($table, $where = null) {
        $sql = "SELECT * FROM $table";
        if($where !=null){
            $sql .= " WHERE $where";
        }
        $query = $this->connection->query($sql) or die($this->connection->error);
        return $query->fetch_all(MYSQLI_BOTH);
    }
    
    public function showCustom($custom, $table,$table2,$on ,$where = null) {
        $sql = "SELECT $custom FROM $table INNER JOIN $table2 ON $on";
        if($where !=null){
            $sql .= " WHERE $where";
        }
        $query = $this->connection->query($sql) or die($this->connection->error);
        return $query->fetch_all(MYSQLI_BOTH);
    }
    
    public function edit($table, $fild = null, $where = null){
        $sql = "UPDATE $table SET";
        $set = null;
        foreach($fild as $key => $values){
            $set .= ", ".$key." = '".$values."'";
        }
        $sql .= substr($set, 1). " WHERE $where";
        $query = $this->connection->prepare($sql) or die($this->connection->error);
        $query->execute();
    }

    public function delete($table,$where){
        $sql = "DELETE FROM $table WHERE $where";
        $this->connection->query($sql)or die($this->connection->error);
    }

    public function login($where = null) {
        $sql = "SELECT * FROM user";
        if($where !=null){
            $sql .= " WHERE $where";
        }
        $query = $this->connection->query($sql) or die($this->connection->error);
        return $query->fetch_array(MYSQLI_BOTH);
    }
}

?>