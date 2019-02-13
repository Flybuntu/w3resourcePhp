<?php

$color = array('white', 'green', 'red');


echo "<ul>";
for($i=0; $i<count($color); $i++)
{
  echo "<li>" . $color[$i] . "</li>";
}

echo "</ul>";

?>