<?php

class SimpleDao {

  // fullfill
  private $db;

  public function get_some() {
    
    global $CONF;

    $this->db = new Database($CONF['db']['dsn']);
    
    echo 'Some conf: \n';
    var_dump($CONF);

    echo 'Some db: \n';
    var_dump($this->db);

  }

}

?>