<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inschrijving Seizoen 2022 - 2023</title>
</head>
<body>
    <h1>Inschrijving Seizoen 2022 - 2023</h1>
    <form action="./verwerk_inschrijving" method="post">
        <input type="text" name="naam" id="naam" placeholder="Naam" minlength="1" maxlength="30" required><br>
        <input type="text" name="voornaam" id="voornaam" placeholder="Voornaam" minlength="1" maxlength="30" required><br>
        <select name="ploeg" id="ploeg" required>
            <option>Selecteer Ploeg</option>
            <option value="U6">U6</option>
            <option value="U7">U7</option>
            <option value="U8">U8</option>
            <option value="U9">U9</option>
            <option value="U10">U10</option>
            <option value="U11">U11</option>
            <option value="U12">U12</option>
            <option value="U13">U13</option>
            <option value="U14">U14</option>
            <option value="U15">U15</option>
            <option value="U16">U16</option>
            <option value="U17">U17</option>
        </select><br>
        <select name="kledij" id="kledij" required>
            <option>Selecteer Kledij</option>
            <option value="geen">Geen nieuwe kledij</option>
            <option value="wedstrijd">Alleen Wedstrijdkledij (€60)</option>
            <option value="trainingspak">Alleen Trainigspak (€50)</option>
            <option value="wedstrijd+trainingspak">Wedstrijdkledij + Trainingspak (€110)</option>
        </select><br>
        <input type="checkbox" name="trainingsbal" id="trainingsbal">
        <label for="trainingsbal">Trainingsbal Nodig (€8)?</label><br>
        <input type="checkbox" name="algemenewaarden" id="algemenewaarden">
        <label for="algemenewaarden">Akkoord met algemene waarden?</label><br>
        <button type="submit">Verzenden</button>
    </form>
</body>
</html>