<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam;
    $voornaam;
    $ploeg;

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

    $link = mysqli_connect("localhost", "Trainer", "penalty", "voetbal");

    function escape_sql($string) {
        return mysqli_real_escape_string($GLOBALS['link'], $string);
    }

    $alle_ids_query = "SELECT id, wedstrijdkledij, trainingspak, bal
        FROM voetbal
        WHERE naam = '".escape_sql($naam)."'
        AND voornaam = '".escape_sql($voornaam)."'
        AND ploeg = '".escape_sql($ploeg)."'
    ";

    $alle_ids_result = mysqli_query($link, $alle_ids_query);
    $alle_ids = mysqli_fetch_assoc($alle_ids_result);

    if ($alle_ids == null) {
        echo "<h1>Er was geen inschrijving met de volgende gegevens:</h1>";
        echo "<ul>
        <li>Naam: $naam</li>
        <li>Vooraam: $voornaam</li>
        <li>Ploeg: $ploeg</li>
        </ul>";
        exit;
    }
    

    // Verwijder
    mysqli_query($link, "DELETE FROM voetbal 
        WHERE id = ".$alle_ids["id"]);

    if ($alle_ids["wedstrijdkledij"]) {
        mysqli_query($link, "DELETE FROM prijzen 
            WHERE item = 'wedstrijdkledij'
            AND id = ".$alle_ids["wedstrijdkledij"]);
    }

    if ($alle_ids["trainingspak"]) {
        mysqli_query($link, "DELETE FROM prijzen 
            WHERE item = 'trainingspak'
            AND id = ".$alle_ids["trainingspak"]);
    }

    if ($alle_ids["bal"]) {
        mysqli_query($link, "DELETE FROM prijzen 
            WHERE item = 'bal'
            AND id = ".$alle_ids["bal"]);
    }


    if (!mysqli_error($link)) {
        echo "<h1>Inschrijving is verwijderd</h1>";
    }

    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwijder Inschrijvingen</title>
</head>
<body>
    <form action="./verwijder_inschrijvingen" method="post">
        <input type="text" name="naam" id="naam" placeholder="Naam" minlength="1" maxlength="30" required><br>
        <input type="text" name="voornaam" id="voornaam" placeholder="Voornaam" minlength="1" maxlength="30" required><br>
        <select name="ploeg" id="ploeg" required>
            <option>Selecteer Ploeg</option>
            <option value="U6">U6</option>
            <option value="U7">U7</option>
            <option value="U8">U8</option>
            <option value="U9">U9</option>
            <option value="U10">U10</option>
            <option value="U11">U11</option>
            <option value="U12">U12</option>
            <option value="U13">U13</option>
            <option value="U14">U14</option>
            <option value="U15">U15</option>
            <option value="U16">U16</option>
            <option value="U17">U17</option>
        </select><br>
        <button type="submit">Inschrijving Ongedaan Maken</button>
    </form>
</body>
</html>