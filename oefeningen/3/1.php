<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


$open_dagen = [
    "maandag",
    "dinsdag",
    "woensdag",
    "donderdag",
    "vrijdag",
];

$gesloten_dagen = [
    "zaterdag",
    "zondag"
];

$dagen = $open_dagen + $gesloten_dagen;

if (!isset($_GET["dag"])) {
    echo "De dag was niet door gegeven.";
    exit;
}

$dag = $_GET["dag"];

if (in_array($dag, $open_dagen)) {
    echo "De website is open.";
}
elseif (in_array($dag, $gesloten_dagen)) {
    echo "De website is gesloten.";
}
else {
    echo "De dag $dag bestaat niet.";
}

echo "</body></html>";
?>