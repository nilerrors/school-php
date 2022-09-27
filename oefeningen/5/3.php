<?php

function berekenOppervlakte(float $lengte, float $breedte) {
    return $lengte * $breedte;
}

$lengte = 5;
$breedte = 6;
$oppervlakte = berekenOppervlakte($lengte, $breedte);

echo 'Lengte: '.$lengte.'<br>';
echo 'Breedte: '.$breedte.'<br>';
echo 'Oppervlakte: '.$oppervlakte.'<br>';

?>