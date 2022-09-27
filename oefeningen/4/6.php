<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


$zin = "De kat krabt de krollen van de trap";

$letter1 = "";
$letter2 = "";

if (isset($_GET["letter1"]) && $_GET["letter1"] !== "") {
    $letter1 = $_GET["letter1"];
} else {
    echo "Letter 1 is niet meegegeven.";
    exit;
}

if (isset($_GET["letter2"]) && $_GET["letter2"] !== "") {
    $letter2 = $_GET["letter2"];
} else {
    echo "Letter 2 is niet meegegeven.";
    exit;
}

$zin = str_replace($letter1, $letter2, $zin);

echo $zin;


echo "</body></html>";
?>