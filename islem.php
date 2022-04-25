<?php

error_reporting(0);

$data = $_POST['data'];

$arrow = explode("\r\n",$data); 

$round = count($arrow);

$fin = 0;

for($i=0; $i < $round; $i++) {

$arrow2 = explode("x",$arrow[$i]);

$end = $arrow2[0] * $arrow2[1];
 
$fin = $end / 10000;

$last += $fin;

}

echo $last

?>