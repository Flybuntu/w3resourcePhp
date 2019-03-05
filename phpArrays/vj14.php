<?php

$rjeci = array("abcd","abc","de","hjjj","g","wer");
$brojSlova =[];
foreach($rjeci as $key=>$val) {
  array_push($brojSlova, strlen($val));
}
echo min($brojSlova) . "<br>" . max($brojSlova);



?>