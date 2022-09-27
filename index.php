<?php

$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

if (!isset($queries["username"])) {
    $username = "Sabawoon";
} else {
    $username = $queries["username"];
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voorbeeld</title>
</head>
<body>

<?php

echo "Hallo $username!";

?>
    
</body>
</html>