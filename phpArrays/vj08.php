<?php

$arr = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");

echo "<pre>";

asort($arr);
var_dump($arr);

ksort($arr);
var_dump($arr);

arsort($arr);
var_dump($arr);

krsort($arr);
var_dump($arr);


echo "</pre>";


?>