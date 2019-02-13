<?php 
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
echo "Remote address: " . $_SERVER['REMOTE_ADDR'];
echo "Http client ip: " . $_SERVER['HTTP_CLIENT_IP'];

?>

