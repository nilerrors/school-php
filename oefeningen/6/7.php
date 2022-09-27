<?php

include "../../functies/5/4.php";

head('Sterren');

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

footer();

?>