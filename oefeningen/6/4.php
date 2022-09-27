<?php

include "../../functies/5/4.php";

head('Landen en hun hoofdsteden');

$landen = [
    "België" => "Brussel",
    "Nederland" => "Amsterdam",
    "Duitsland" => "Berlijn",
    "Italië" => "Rome",
    "Zweden" => "Stockholm"
];

foreach ($landen as $land => $hoofdstad) {
    echo 'De hoofdstad van '.$land.' is '.$hoofdstad.'.<br>';
}


footer();

?>