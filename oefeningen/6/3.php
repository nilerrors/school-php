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
for ($i = 0; $i < count($kleuren); $i++) {
    if ($i === 0) echo $kleuren[$i];
    else echo ', '.$kleuren[$i];
}


footer();

?>