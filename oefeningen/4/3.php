<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";

$tekst = "";
$aantal = 0;

if (isset($_GET["tekst"]) && $_GET["tekst"] !== "") {
    $tekst = $_GET["tekst"];
} else {
    echo "De tekst is niet gegeven.";
    exit;
}

if (!isset($_GET["aantal"])) {
    echo "Het aantal is niet gegeven.";
    exit;
}
elseif (isset($_GET["aantal"]) && !is_numeric($_GET["aantal"])) {
    echo "Het aantal is niet een getal.";
    exit;
}

$aantal = (int)$_GET["aantal"];

echo str_repeat($tekst, $aantal);

echo "</body></html>";
?>