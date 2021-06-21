<?php
class Database extends PDO {
    public function __construct() {
        /* Sürücü isteğiyle bir ODBC veritabanına bağlanalım */
        $dsn = 'mysql:dbname=borsa;host=127.0.0.1;charset=utf8';
        $user = 'root';
        $password = '';
        try {
            parent::__construct($dsn, $user, $password);
            $this->query("SET NAMES UTF8");
            $this->query("SET CHARACTER SET UTF8");
        } catch (PDOException $e) {
            echo 'Bağlantı kurulamadı: ' . $e->getMessage();
        }
    }
public function select($sql,$params= array(),$alım_tarzı = PDO::FETCH_ASSOC) {
    /*
     * $table,$where=false
     * if($where==false){
        $sql="SELECT * FROM $table";
    } else {
        $sql="SELECT * FROM $table WHERE $where";
    }
    $sth=$this->prepare($sql);
    $sth->execute();
    return $sth->fetchAll();
    */
    
    $sth=$this->prepare($sql);
    foreach ($params as $key=>$value){
        $sth->bindValue($key, $value);
    }
  
    $sth->execute();
    return $sth->fetchAll($alım_tarzı);
}
public function affectedRows($sql,$params= array()) {
    $sth=$this->prepare($sql);
    foreach ($params as $key=>$value){
        $sth->bindValue($key, $value);
    }
    $sth->execute();
    return $sth->rowCount();
}
public function insert($tableName,$data=array()) {
    $fieldKeys= implode(",", array_keys($data));
    $fieldValues= ":".implode(", :", array_keys($data));
    $sql="INSERT INTO $tableName ($fieldKeys) VALUES ($fieldValues)";
    $sth=$this->prepare($sql);
    foreach ($data as $key=>$value){
        $sth->bindValue(":$key", $value);
    }
    $sth->execute();
}
public function update($tableName,$data=array(),$where) {
    $updateKeys=null;
    foreach ($data as $key=>$value){
       $updateKeys.= "$key=:$key,";
    }
    $updateKeys = rtrim($updateKeys,",");
    $sql="UPDATE $tableName SET $updateKeys WHERE $where";
    echo $sql;
    print_r($data);
    $sth= $this->prepare($sql);
     foreach ($data as $key=>$value){
        $sth->bindValue(":$key", $value);
    }
    
    return $sth->execute();
  }
  public function delete($tableName,$where,$limit=1) {
      $this->exec("DELETE FROM $tableName WHERE $where LIMIT $limit");
  }
}
