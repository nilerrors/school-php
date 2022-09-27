<?php

$naam;
$voornaam;
$ploeg;
$wedstrijdkledij = false;
$trainingspak = false;
$trainingsbal = false;

$inschrijving_prijs = 230;
$wedstrijdkledij_prijs = 60;
$trainingspak_prijs = 50;
$trainingsbal_prijs = 8;


// Controle variabelen
if (isset($_POST["naam"]) && trim($_POST["naam"]) !== "") {
    $naam = $_POST["naam"];
} else {
    echo 'Naam is niet gegeven';
    echo '<a href="./inschrijving_voetbal_seizoen2022-2023">Terug</a>';
    exit;
}

if (isset($_POST["voornaam"]) && trim($_POST["voornaam"]) !== "") {
    $voornaam = $_POST["voornaam"];
} else {
    echo 'Vooraam is niet gegeven';
    echo '<a href="./inschrijving_voetbal_seizoen2022-2023">Terug</a>';
    exit;
}

if (isset($_POST["ploeg"]) && trim($_POST["ploeg"]) !== "") {
    $ploeg = $_POST["ploeg"];
} else {
    echo 'Ploeg is niet gegeven';
    echo '<a href="./inschrijving_voetbal_seizoen2022-2023">Terug</a>';
    exit;
}

if (isset($_POST["kledij"]) && trim($_POST["kledij"]) !== "") {
    $kledij = $_POST["kledij"];
    if ($kledij === "wedstrijd") {
        $wedstrijdkledij = true;
    }
    elseif ($kledij === "trainingspak") {
        $trainingspak = true;
    }
    elseif ($kledij === "wedstrijd+trainingspak" || $kledij === "trainingspak+wedstrijd") {
        $wedstrijdkledij = true;
        $trainingspak = true;
    }
} else {
    echo 'Kledij is niet geselecteerd.';
    echo '<a href="./inschrijving_voetbal_seizoen2022-2023">Terug</a>';
    exit;
}

if (isset($_POST["trainingsbal"]) && trim($_POST["trainingsbal"]) === "on") {
    $trainingsbal = true;
}

if (!isset($_POST["algemenewaarden"]) || (isset($_POST["algemenewaarden"]) && trim($_POST["algemenewaarden"]) !== "on")) {
    echo 'U ging niet akkoord met de algemene waarden.';
    echo '<a href="./inschrijving_voetbal_seizoen2022-2023">Terug</a>';
    exit;
}

// Gegevens wegschrijven op database
$link = mysqli_connect("localhost", "Trainer", "penalty", "voetbal");

function escape_sql($string) {
    return mysqli_real_escape_string($GLOBALS['link'], $string);
}

$wedstrijdkledij_prijs_query = "INSERT INTO prijzen (
    item,
    prijs) VALUES (
    'wedstijdkledij',
    ".$wedstrijdkledij_prijs.");
";
$wedstrijdkledij_prijs_id = null;
if ($wedstrijdkledij) {
    $result = mysqli_query($link, $wedstrijdkledij_prijs_query);
    $wedstrijdkledij_prijs_id = mysqli_insert_id($link);
}


$trainingspak_prijs_query = "INSERT INTO prijzen (
    item,
    prijs) VALUES (
    'trainingspak',
    ".$trainingspak_prijs.");
";

$trainingspak_prijs_id = null;
if ($trainingspak) {
    $result = mysqli_query($link, $trainingspak_prijs_query);
    $trainingspak_prijs_id = mysqli_insert_id($link);
}


$trainingsbal_prijs_query = "INSERT INTO prijzen (
    item,
    prijs) VALUES (
    'bal',
    ".$trainingsbal_prijs.");
";

$trainingsbal_prijs_id = null;
if ($trainingsbal) {
    $result = mysqli_query($link, $trainingsbal_prijs_query);
    $trainingsbal_prijs_id = mysqli_insert_id($link);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inschrijving voor 2022 - 2023</title>
</head>
<body>
    <h1>Inschrijving voor seizoen 2022 - 2023 geslaagd</h1>

<?php

$query = "INSERT INTO voetbal (
    naam,
    voornaam,
    ploeg,
    wedstrijdkledij,
    trainingspak,
    bal) VALUES (
    '".escape_sql($naam)."',
    '".escape_sql($voornaam)."',
    '".escape_sql($ploeg)."',
    ".($wedstrijdkledij ? $wedstrijdkledij_prijs_id : "NULL").",
    ".($trainingspak ? $trainingspak_prijs_id : "NULL").",
    ".($trainingsbal ? $trainingsbal_prijs_id : "NULL")."
);";

$result = mysqli_query($link, $query);

if ($result) {
    echo "Data is in database";
}
else {
    echo "Er is iets mis gegaan bij het wegschrijven van de gegevens.";
    echo "<br>";
    echo mysqli_error($link);
    exit;
}

$totaal_prijs = $inschrijving_prijs;
$totaal_prijs += $wedstrijdkledij ? $wedstrijdkledij_prijs : 0;
$totaal_prijs += $trainingspak ? $trainingspak_prijs : 0;
$totaal_prijs += $trainingsbal ? $trainingsbal_prijs : 0;

?>
    <ul>
        <li>Naam en voornaam: <?php echo $naam.' '.$voornaam ?></li>
        <li>Ploeg: <?php echo $ploeg ?></li>
        <li>Keuze Kledij: <?php 
            if ($wedstrijdkledij && $trainingspak) {
                echo "Wedstrijdkledij en trainingspak";
            } elseif ($wedstrijdkledij) {
                echo "Wedstrijdkledij";
            } elseif ($trainingspak) {
                echo "Trainingspak";
            } else {
                echo "Geen";
            }
        ?></li>
        <li>Bal?: <?php echo $trainingsbal ? "Ja" : "Nee"; ?></li>
        <li>Totaalprijs: €<?php echo $totaal_prijs; ?></li>
    </ul>
</body>
</html>