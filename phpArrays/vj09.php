<?php


$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];

function average($arr) 
{
  $broj=0;
  foreach($arr as $val)
  {
    $broj += $val;
  }
  $broj = $broj / count($arr);
  return $broj;
}

function sevenLow($arr) 
{
  sort($arr);
  $arrLow = [];

  foreach($arr as $val)
  {
    if(count($arrLow)>=7)
    { 
      return $arrLow;
      break;
    }
    /* Provjera radi ponavljanja */
    elseif( in_array($val, $arrLow) )
    {
      continue;
    } 
    else 
    {
      array_push($arrLow, $val);
    }
  }

}

function sevenHigh($arr)
{
  rsort($arr);
  $arrHigh = [];

  foreach($arr as $val)
  {
    if(count($arrHigh)>=7)
    {   
      sort($arrHigh);
      return $arrHigh;
      break;
    }
    /* Provjera radi ponavljanja */
    elseif( in_array($val, $arrHigh) )
    {
      continue;
    } 
    else 
    {
      array_push($arrHigh, $val);
    }
  }
}

$lowTempString = "";
$sevenLowArray = sevenLow($temp);
foreach($sevenLowArray as $value) 
{ 
    $lowTempString .= $value . ", ";
}

$highTempString = "";
$sevenHighArray = sevenHigh($temp);
foreach($sevenHighArray as $value) 
{ 
    $highTempString .= $value . ", ";
}

echo "Average Temp is: " . average($temp) . "<br>";

echo "List of seven lowest temperatures: " . $lowTempString . "<br>";

echo "List of seven highest temperatures: " . $highTempString
?>