<?php

// $link = mysqli_connect("localhost", "root", "", "testleerlingen");
$link = mysqli_connect("localhost", "usrcursusphp", "pwdcursusphp", "cursusphp");

if ($link) {
    echo "Verbinding geslaagd";
} else {
    echo "Verbinding mislukt<br>";
    echo mysqli_connect_error();
}

?>