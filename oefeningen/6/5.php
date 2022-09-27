<?php

include "../../functies/5/4.php";

head('Namen');

$arr_a = [
    'Jan',
    'Piet',
    'Joris',
    'Corneel',
    'Jos',
    'Jef',
    'Marie',
    'Ann',
    'Louise',
    'Peter',
    'Tom',
    'Geert',
    'Karen',
    'Dries',
    'Lotte'
];

$arr_b = [
    'Jan',
    'Piet',
    'Joris',
    'Corneel',
    'Chris',
    'Mia',
    'Leonard',
    'Karel'
];

sort($arr_a);
sort($arr_b);

echo "Array A:<br>";
foreach ($arr_a as $naam) {
    echo $naam.' zit '.(!in_array($naam, $arr_b) ? "niet" : "").' in array B.<br>';
}
echo "<br>";
echo "Array B:<br>";
foreach ($arr_b as $naam) {
    echo $naam.' zit '.(!in_array($naam, $arr_a) ? "niet" : "").' in array A.<br>';
}

footer();

?>