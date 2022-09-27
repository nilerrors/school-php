<?php

$naam = $_POST["txtNaam"];
$voorNaam = $_POST["txtVoornaam"];

if (!isset($naam)) $naam = "John";
if (!isset($voorNaam)) $naam = "Doe";

echo "Hallo $naam $voorNaam";


?>