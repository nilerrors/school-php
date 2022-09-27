<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


$naam = "";
$voornaam = "";

if (isset($_GET["naam"]) && $_GET["naam"] !== "") {
    $naam = $_GET["naam"];
}
if (isset($_GET["voornaam"]) && $_GET["voornaam"] !== "") {
    $voornaam = $_GET["voornaam"];
}


if (!isset($_GET["naam"]) || !isset($_GET["voornaam"])) {
    echo '
    <form action="./2" method="get">
    <input type="text" name="naam" placeholder="Naam" value="'.$naam.'" required><br>
    <input type="text" name="voornaam" placeholder="Voornaam" value="'.$voornaam.'" required><br>
    <button type="submit">Verzenden</button>
    </form>
    ';
    exit;
}

echo "Hallo $voornaam $naam";


echo "</body></html>";
?>
