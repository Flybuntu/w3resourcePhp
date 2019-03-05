<?php

$Color = array('A'=>"Blue", "B"=>"Green", "c"=>"Red");


/* To lower case */
foreach($Color as $key=>$val) {
  $Color[$key] = strtolower($val);
}

var_dump($Color);

foreach($Color as $key=>$val) {
  $Color[$key] = strtoupper($val);
}

var_dump($Color);

?>