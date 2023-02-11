<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add hotel | Admin</title>|
</head>
<body>
    <form action="hotele-dodaj-update.php" method="post">
        <label for="imgsrc">Image source:</label>
        <input type="text" name="imgsrc" id="imgsrc">
        <br>
        <label for="nazwa">Nazwa:</label>
        <input type="text" name="nazwa" id="nazwa">
        <br>
        <label for="loc">Lokalizacja:</label>
        <input type="text" name="loc" id="loc" >
        <br>
        <label for="skropis">Skrócony opis:</label>
        <input type="text" name="skropis" id="skropis">
        <br>
        <label for="opis">Opis:</label>
        <input type="text" name="opis" id="opis">
        <br>
        <label for="cena">Cena:</label>
        <input type="number" name="cena" id="cena">
        <br>
        <label for="liczba">Wyżywienie:<br>Prosze wpisać 'all', 'hb' lub 'bb'</label>
        <input type="text" name="wyzywienie" id="wyzywienie">
        <br>
        <label for="gwiazdy">Gwiazdy:</label>
        <input type="number" name="gwiazdy" id="gwiazdy">
        <br>
        <label for="ocena">Ocena:</label>
        <input type="number" name="ocena" id="ocena">
        <br>
        <input type="submit" value="Zatwierdż">
    </form>
</body>
</html>