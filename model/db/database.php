<?php

/* This class is developed to be a wrapper to the PDO functions */

class Database {

  private $dbh;

  public function __construct($dsn, $user="", $passwd="") { 
    // TODO
    try {
      $this->dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
      die('Connection failed: ' . $e->getMessage());
    }
  }

  public function delete($table, $where, $bind="") { 
    // TODO
  }

  public function insert($table, $info) { 
    // TODO
  }

  public function query($table, $where="", $bind="", $fields="*") { 
    //TODO make it work
    $stmt = $this->dbh->prepare ("SELECT ".$fields." FROM ".$table." WHERE ");
    $stmt -> bindParam(':id_user', $id_user);
    $stmt -> execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function update($table, $info, $where, $bind="") { 
    // TODO
  }

  public function run($sql, $bind="") { 
    // TODO ddl apply
  }

  public function get_errors() {
    // TODO
  }
}

?>