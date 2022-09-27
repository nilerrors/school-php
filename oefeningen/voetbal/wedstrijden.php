<?php

$link = mysqli_connect("localhost", "Trainer", "penalty", "voetbal");

// Alle ploegen
$ploegen_result = mysqli_query($link, "SELECT `TeamA` FROM wedstrijden WHERE `TeamA` LIKE 'U%'
UNION
SELECT `TeamB` FROM wedstrijden WHERE `TeamB` LIKE 'U%'");

$ploegen = mysqli_fetch_all($ploegen_result);

for ($i = 0; $i < count($ploegen); $i++) {
    $ploegen[$i] = $ploegen[$i][0];
}

$unieke_ploeg = null;

$wedstijd_data_per_ploeg = array();

if (isset($_GET["ploeg"]) && trim($_GET["ploeg"]) !== "") { // Unieke Ploegen
    $ploeg = $_GET["ploeg"];
    $unieke_ploeg = $ploeg;
    if (!in_array($ploeg, $ploegen)) {
        echo "Ploeg '$ploeg' bestaat niet.";
    }

    echo "<!-- $ploeg -->";

    $wedstrijd_result = mysqli_query($link, "SELECT * FROM wedstrijden WHERE `TeamA` = '".$ploeg."' OR `TeamB` = '".$ploeg."' ORDER BY `DatumWedstrijd` ASC, `Uur` ASC");
    $wedstijd_data_per_ploeg = mysqli_fetch_all($wedstrijd_result);
} else { // Alle Ploegen
    foreach ($ploegen as $ploeg) {
        echo "<!-- $ploeg -->";
        $wedstrijd_result = mysqli_query($link, "SELECT * FROM wedstrijden WHERE `TeamA` = '".$ploeg."' OR `TeamB` = '".$ploeg."' ORDER BY `DatumWedstrijd` ASC, `Uur` ASC LIMIT 1 ");
        $wedstrijd = mysqli_fetch_assoc($wedstrijd_result);

        array_push($wedstijd_data_per_ploeg, $wedstrijd);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border: 1px solid;
            width: 100%;
            border-collapse: collapse;
        }
        td, th {
            font-size: larger;
            border: 1px solid;
            margin: 0px;
        }
        a, a:visited {
            color: blue;
        }
    </style>
    <title>Wedstrijden</title>
</head>
<body>
    <?php
    if ($unieke_ploeg == null) {
        echo "<h1>Eerst volgende wedstrijden van onze ploegen</h1>";
    } else {
        echo "<h1>Alle wedstrijden van $unieke_ploeg</h1>";
    }
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Ploeg A</th>
            <th>Ploeg B</th>
            <th>Datum</th>
            <th>Thuis / Uit</th>
            <th>Uur</th>
        </tr>
        <?php
            foreach ($wedstijd_data_per_ploeg as $value) {
                echo "<tr>";
                foreach ($value as $v) {
                    if ($unieke_ploeg == null && in_array($v, $ploegen)) {
                        echo "<td><a href=\"./wedstrijden?ploeg=$v\">$v</a></td>";
                    } else {
                        echo "<td>$v</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
    <script>
        function selectPloeg(ploeg) {
            window.location.href = `./ploeg=${ploeg}`
        }
    </script>
</body>
</html>