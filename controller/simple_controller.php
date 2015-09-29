<?php

// simple controller to interact with dao

$dao = new SimpleDao();
$res = $dao->get_some();

// debug
echo 'Some result: \n';
var_dump($res);

?>