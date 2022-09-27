<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


$leeftijd = 17;

if ($leeftijd >= 16)
    if ($leeftijd >= 18)
        echo "Je mag alcohol drinken en auto rijden.";
    else
        echo "Je mag alcohol drinken, maar geen auto rijden.";
else
    echo "Je mag zowel geen alcohol drinken als auto rijden.";


echo "</body></html>";
?>