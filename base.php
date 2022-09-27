<?php
echo "<!DOCTYPE html><html lang=\"en\"><head>";
echo"<meta charset=\"UTF-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
echo "<title>Voorbeeld</title>";
echo "</head><body>";

echo "</body></html>";


function head(string $title) {
    echo '<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.'</title>
    </head><body>';
}

function footer() {
    echo "</body></html>";
}

?>