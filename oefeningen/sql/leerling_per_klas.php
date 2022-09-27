<?php

$klas_naam;

if (isset($_GET["klas"]) && $_GET["klas"] !== "") {
    $klas_naam = $_GET["klas"];
} else {
    echo "Klas is niet gegeven.";
    exit;
}

$link = mysqli_connect("localhost", "root", "", "leerlingen");

$query = "SELECT unieknummer, naam, voornaam FROM leerlingen
            WHERE klas = '".mysqli_real_escape_string($link, $klas_naam)."'";

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

if ($row === null) {
    echo "Klas met de naam $klas_naam bestaat niet.";
    exit;
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "De id van de leerling is ".$row['unieknummer']."<br>";
    echo "De naam van de leerling is ".$row['naam']."<br>";
    echo "De voornaam van de leerling is ".$row['voornaam']."<br>";
    echo "<br><br>";
}

?>