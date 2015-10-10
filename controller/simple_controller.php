<?php

// simple controller to interact with dao

class SimpleController {

  private $dao;

  public function __construct() {
    $this->dao = new SimpleDao();
  }

  public function get_control_of_some() {
    
    return $this->dao->get_some();
    
  }

}

?>
