<?php
  
require_once 'robot.php';

$robot1 = new robot ('ngik ngik',20);

$robot1 ->set_suara ('ngok ngik ngek');
$robot1 ->set_berat (150);

echo "suara robot....".$robot1->get_suara().'<br>';
echo "berat robot....".$robot1->get_berat ().'kg'.'<br>';

?>