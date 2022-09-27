<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";


const SECRET_PASSWORD = "sesamopenu";


$password = "";

if (isset($_GET["password"]) && $_GET["password"] !== "") {
    $password = $_GET["password"];
} else {
    echo "Password is niet meegegeven.";
    exit;
}

if (md5(SECRET_PASSWORD) === md5($password)) {
    echo "Password is juist.";
} else {
    echo "Password is fout.";
}


echo "</body></html>";
?>