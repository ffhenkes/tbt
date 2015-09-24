<?php

// simple controller to interact with dao

$dao = new SimpleDao();
$res = $dao->get_some();

// debug
echo '<pre>';
var_dump($res);
echo '</pre>';

?>