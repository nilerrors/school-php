<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


const PASSWORD_LENGTH = 4;


$password = "";

if (isset($_GET["password"]) && $_GET["password"] !== "") {
    $password = $_GET["password"];
} else {
    echo "Password is niet meegegeven.";
    exit;
}

if (strlen($password) === PASSWORD_LENGTH) {
    echo "Password is de juiste lengte.";
} else {
    echo "Password is de foute lengte.";
}


echo "</body></html>";
?>