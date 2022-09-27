<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


$x = (int)$_GET["x"];
$y = (int)$_GET["y"];

if (!isset($x))
    $x = 1;
if (!isset($y))
    $y = 1;
if ($y === 0)
    $y = 1;


echo "$x + $y = ".($x + $y)."<br>";
echo "$x - $y = ".($x - $y)."<br>";
echo "$x * $y = ".($x * $y)."<br>";
echo "$x / $y = ".($x / $y)."<br>";
echo "$x % $y = ".($x % $y)."<br>";


echo "</body></html>";
?>