<?php

function head(string $title) {
    echo '<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.'</title>
    </head><body>';
}

function footer() {
    echo "</body></html>";
}

head("Den dikke en den dunne");

echo '<b>Den dikke</b> en <i>den dunne</i>';


footer()


?>