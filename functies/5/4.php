<?php

function head($title = '') {
    echo '<!DOCTYPE html><html lang="en"><head>';
    echo '<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>'.$title.'</title>';
    echo '</head><body>';
}

function footer() {
    echo "</body></html>";
}

?>