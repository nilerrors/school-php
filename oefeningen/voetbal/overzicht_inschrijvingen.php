<?php

$inschrijvings_prijs = 230;

$link = mysqli_connect("localhost", "Trainer", "penalty", "voetbal");

// aantal spelers per ploeg
$ploegen_result = mysqli_query($link, "SELECT DISTINCT ploeg FROM voetbal");
$ploegen = mysqli_fetch_all($ploegen_result);
$aantal_spelers_per_ploeg;
foreach ($ploegen as $ploeg) {
    $aantal_result = mysqli_query($link, "SELECT COUNT(*) FROM voetbal WHERE ploeg = '".$ploeg[0]."'");
    $aantal_spelers = mysqli_fetch_row($aantal_result);

    $aantal_spelers_per_ploeg[$ploeg[0]] = $aantal_spelers[0];
}


// aantal bestelde trainingspakken
$trainingspakken_result = mysqli_query($link, "SELECT COUNT(*) FROM prijzen WHERE item = 'trainingspak'");
$trainingspakken = mysqli_fetch_row($trainingspakken_result);
$aantal_trainingspakken = $trainingspakken[0];

// aantal bestelde wedstijdkledij
$wedstijdkledij_result = mysqli_query($link, "SELECT COUNT(*) FROM prijzen WHERE item = 'wedstijdkledij'");
$wedstijdkledij = mysqli_fetch_row($wedstijdkledij_result);
$aantal_wedstijdkledij = $wedstijdkledij[0];

// aantal bestelde wedstijdkledij
$ballen_result = mysqli_query($link, "SELECT COUNT(*) FROM prijzen WHERE item = 'bal'");
$ballen = mysqli_fetch_row($ballen_result);
$aantal_ballen = $ballen[0];

// totaal inschrijvingsgeld
$aantal_inschrijvingen_result = mysqli_query($link, "SELECT COUNT(*) FROM voetbal");
$inschrijvingen = mysqli_fetch_row($aantal_inschrijvingen_result);
$aantal_inschrijvingen = $inschrijvingen[0];

$totaal_inschrijvingsgeld = $inschrijvings_prijs * $aantal_inschrijvingen;

$extra_kosten_result = mysqli_query($link, "SELECT prijs FROM prijzen");
$extra_kosten = mysqli_fetch_all($extra_kosten_result);

$totaal_extra_kosten = 0;
foreach ($extra_kosten as $prijs) {
    $totaal_extra_kosten += $prijs[0];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Inschrijvingen</title>
</head>
<body>
    <ul>
        <li>
            <div>
                Aantal Spelers per Ploeg
            </div>
            <ul>
                <?php
                    foreach($aantal_spelers_per_ploeg as $ploeg => $aantal) {
                        echo "<li>$ploeg → $aantal</li>";
                    }
                ?>
            </ul>
        </li>
        <li>
            <div>
                Aantal Bestelde Trainingspakken
            </div>
            <span><?php echo $aantal_trainingspakken; ?></span>
        </li>
        <li>
            <div>
                Aantal Bestelde Wedstrijdkledij
            </div>
            <span><?php echo $aantal_wedstijdkledij; ?></span>
        </li>
        <li>
            <div>
                Aantal Bestelde Ballen
            </div>
            <span><?php echo $aantal_ballen; ?></span>
        </li>
        <li>
            <div>
                Totaal Inschrijvingsgeld
            </div>
            <span><?php echo "€".$totaal_inschrijvingsgeld; ?></span>
        </li>
        <li>
            <div>
                Totaal Extra Kosten
            </div>
            <span><?php echo "€".$totaal_extra_kosten; ?></span>
        </li>
    </ul>
</body>
</html>