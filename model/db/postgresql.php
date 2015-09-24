<?php

/**
   This class is developed to be a wrapper to the PDO:postgresql functions

 */

class Postgresql {

  public function __construct($dsn, $user="", $passwd="") { 
    // TODO
  }

  public function delete($table, $where, $bind="") { 
    // TODO
  }

  public function insert($table, $info) { 
    // TODO
  }

  public function query($table, $where="", $bind="", $fields="*") { 
    //TODO
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