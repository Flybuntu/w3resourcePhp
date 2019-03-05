<?php
$i = 200;
$zbirka = [];
while($i<=250){
  if($i%4 == 0){
    array_push($zbirka, $i);
  }
  $i++;
}

var_dump($zbirka);


?>