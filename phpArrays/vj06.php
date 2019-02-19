<?php

$jsonCuckoos = '
{"Title":"The Cuckoos Calling",
"Author":"Robert Galbraith",
"Detail": 
{
  "Publisher": "Little Brown"

  }
}';

function pisiFunk($value, $key) {
  echo $key . ": " . $value . "<br>";
}


$decodeCuckoos = json_decode($jsonCuckoos, true);

array_walk_recursive($decodeCuckoos, "pisiFunk");



?>
