<?php

$leerling_id;

if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $leerling_id = $_GET["id"];
} else {
    echo "Leerling id is niet gegeven.";
    exit;
}

$link = mysqli_connect("localhost", "root", "", "leerlingen");

$query = sprintf("SELECT naam, voornaam, klas FROM leerlingen
            WHERE unieknummer = $leerling_id");

$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

if ($row === null) {
    echo "Leerling met id $leerling_id bestaat niet.";
    exit;
}

echo "De naam van de leerling is ".$row['naam']."<br>";
echo "De voornaam van de leerling is ".$row['voornaam']."<br>";
echo "De klas van de leerling is ".$row['klas']."<br>";

?>