<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


$x = 5;
$y = 4;


echo "De waarde van X is $x<br>";
$x += $y;
echo "We tellen daar $y bij en krijgen $x<br>";
$y = 3;
$x *= $y;
echo "We vermenigvuldigen dat met $y en krijgen $x<br>";
$y = 8;
$x -= $y;
echo "We trekken daar $y van af en krijgen $x<br>";
$y = 6;
$x /= $y;
echo "We delen dat door $y en krijgen $x<br>";


echo "</body></html>";
?>