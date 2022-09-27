<?php

include "../../functies/5/4.php";

head('Nummer Tabel');

echo '<style>table, tbody, td {border: 1px solid;border-spacing: 0;}</style>';

echo '<table>';

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo '<td>'.($i * $j).'</td>';
    }
    echo "</tr>";
}

echo '</table>';

footer();

?>