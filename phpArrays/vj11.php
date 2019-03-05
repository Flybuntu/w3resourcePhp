<?php

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

$array3 = $array1;

var_dump($array3);

foreach($array2 as $key=>$value) {
 
  array_push($array3[$key], $value);

}


echo "<pre>";
var_dump($array3);

echo "</pre>";



?>