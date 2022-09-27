<?php

include "../../functies/5/4.php";

head('Gewone en associatieve arrays');

$elementen = [
    "gsm",
    "laptop",
    "cola",
    "snoep"
];


echo 'Op reis kan ik mijn '.$elementen[0].' niet missen.
Ook zonder een '.$elementen[1].' ben ik niets.
En als ik op de '.$elementen[1].'werk,
heb ik nood aan '.$elementen[2].' en '.$elementen[3].'.<br>';



$elementen = [
    "gsm" => "iPhone",
    "laptop" => "Macbook Pro",
    "frisdrank" => "Fanta",
    "snoep" => "M&Ms"
];


echo 'Op reis kan ik mijn '.$elementen["gsm"].' niet missen.
Ook zonder een '.$elementen["laptop"].' ben ik niets.
En als ik op de '.$elementen["laptop"].'werk,
heb ik nood aan '.$elementen["frisdrank"].' en '.$elementen["snoep"].'.<br>';


footer();

?>