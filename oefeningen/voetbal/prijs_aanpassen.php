<?php

$link = mysqli_connect("localhost", "Trainer", "penalty", "voetbal");

function escape_sql($string) {
    return mysqli_real_escape_string($GLOBALS['link'], $string);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id;
    $nieuw_prijs;

    if (isset($_POST["id"]) && trim($_POST["id"]) !== "" && is_numeric($_POST["id"])) {
        $id = $_POST["id"];
    } else {
        echo "ID was niet gegeven.";
        exit;
    }
    if (isset($_POST["nieuw_prijs"]) && $_POST["nieuw_prijs"] !== "" && is_numeric($_POST["nieuw_prijs"])) {
        $nieuw_prijs = $_POST["nieuw_prijs"];
    } else {
        echo "Nieuw prijs was niet gegeven.";
        exit;
    }

    $prijs_aanpassen_result = mysqli_query($link, "UPDATE prijzen SET prijs = ".escape_sql($nieuw_prijs)." WHERE id = ".escape_sql($id));

    if ($prijs_aanpassen_result) {
        echo "Prijs is aangepast.";
    } else {
        echo "Er ging iets mis bij het aanpassen van de prijs.";
    }

    exit;
}



$prijzen_tabel_result = mysqli_query($link, "SELECT id, item, prijs FROM prijzen ORDER BY id");
$prijzen = mysqli_fetch_all($prijzen_tabel_result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        button, input {
            width: 100%;
        }
        table {
            border: 1px solid;
            width: 100%;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid;
            margin: 0px;
        }
        .hidden {
            display: none;
        }
    </style>
    <title>Prijzen aanpassen</title>
</head>
<body>
    <div>
        <button id="toggleShowTable">Laat Tabel Zien</button>
        <table class="hidden">
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Prijs</th>
            </tr>
            <?php
                foreach ($prijzen as $value) {
                    echo "<tr>
                    <td><button onclick=\"setID(".$value[0].")\">".$value[0]."</button></td>
                    <td>".$value[1]."</td>
                    <td>€".$value[2]."</td>
                    </tr>";
                }
            ?>
        </table>
    </div>

    <form action="./prijs_aanpassen" method="post">
        <label for="id">ID:</label>
        <input type="number" name="id" id="id" required><br>
        <label for="nieuw_prijs">Nieuw Prijs:</label>
        <input type="number" name="nieuw_prijs" id="nieuw_prijs" required><br>
        <button type="submit">Verander Prijs</button>
    </form>
    
    <script>
        const table = document.querySelector("table")
        const toggleShowTable = document.querySelector("#toggleShowTable")

        toggleShowTable.addEventListener("click", (event) => {
            table.classList.toggle("hidden")
            if (table.classList.contains("hidden")) {
                event.currentTarget.textContent = "Laat Tabel Zien"
            } else {
                event.currentTarget.textContent = "Laat Tabel Weg"
            }
        })

        function setID(id) {
            document.querySelector("form input#id").value = id
        }
    </script>
</body>
</html>