<?php

$lengte = 5;
$breedte = 6;

function berekenOppervlakte(float $lengte, float $breedte) {
    $oppervlakte = $lengte * $breedte;

    echo 'Lengte: '.$lengte.'<br>';
    echo 'Breedte: '.$breedte.'<br>';
    echo 'Oppervlakte: '.$oppervlakte.'<br>';
}

echo berekenOppervlakte($lengte, $breedte);

?>