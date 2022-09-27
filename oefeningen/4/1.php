<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


if (!isset($_GET["voornaam"])) {
    echo '
    <form action="./1" method="get">
    <input type="text" name="voornaam" placeholder="Voornaam">
    <button type="submit">Verzenden</button>
    </form>
    ';
    exit;
}

$voornaam = $_GET["voornaam"];

echo "Hallo $voornaam";


echo "</body></html>";
?>
