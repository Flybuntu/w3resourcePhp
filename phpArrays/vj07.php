<?php

$arrMod = [1, 2, 3, 4, 5];

function insertArray($arr, $pos, $item) {
  array_splice($arr, $pos, 0, $item);
  return $arr;

}

$arrMod = insertArray($arrMod, 2, '$');

foreach($arrMod as $key=>$value) {
  echo $value . " ";
}



?>