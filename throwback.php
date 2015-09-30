<?php 

require_once('startup.php');

// do something for start

$control = new SimpleController();
$res = $control->get_control_of_some();

// debug
echo 'Some result: \n';
var_dump($res);

?>