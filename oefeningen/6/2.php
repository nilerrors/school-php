<?php

include "../../functies/5/4.php";

head('Kleuren');

$kleuren = [
    "rood",
    "blauw",
    "groen",
    "bruin",
    "oranje"
];


echo "Mijn favoriete kleuren zijn:<br>";
foreach ($kleuren as $kleur) {
    echo "$kleur<br>";
}


footer();

?>