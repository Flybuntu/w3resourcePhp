<?php



function precFloor($num, $pre, $sep)
{
  $numsep = explode($sep, $num);
  $numsep[1] = floor(substr_replace($numsep[1], $sep, $pre, 0));
  echo $numsep[0] . $sep . $numsep[1];
}

precFloor(1.155, 2, ".");

echo "<br>";
precFloor(100.25781, 4, ".");

echo "<br>";
precFloor(-2.9636, 3, ".");
?>