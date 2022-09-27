<?php

include "../../functies/5/4.php";

head('Getallen');

function is_even($num) {
    return $num % 2 === 0;
}

for ($i = 1; $i <= 100; $i++) {
    if (is_even($i)) echo $i.'<br>';
}

footer();

?>