<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit hotel | Admin</title>|
</head>
<body>
    <?php

    $sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
    $res = $sql->query('SELECT * FROM `hotele` WHERE `hotel_id` = ' . $_GET['id'])->fetchAll();

    echo 
    '<form action="hotele-edit-update.php?id=' . $_GET['id'] . '" method="post"">
        <label for="imgsrc">Image source:</label>
        <input type="text" name="imgsrc" id="imgsrc" value="' . $res[0]['img_src'] . '">
        <br>
        <label for="nazwa">Nazwa:</label>
        <input type="text" name="nazwa" id="nazwa" value="' . $res[0]['nazwa'] . '">
        <br>
        <label for="loc">Lokalizacja:</label>
        <input type="text" name="loc" id="loc" value="' . $res[0]['lokalizacja'] . '">
        <br>
        <label for="skropis">Skrócony opis:</label>
        <input type="text" name="skropis" id="skropis" value="' . $res[0]['skr_opis'] . '">
        <br>
        <label for="opis">Opis:</label>
        <input type="text" name="opis" id="opis" value="' . $res[0]['opis'] . '">
        <br>
        <label for="cena">Cena:</label>
        <input type="number" name="cena" id="cena" value="' . $res[0]['cena'] . '">
        <br>
        <label for="gwiazdy">Gwiazdy:</label>
        <input type="number" name="gwiazdy" id="gwiazdy" value="' . $res[0]['gwiazdy'] . '">
        <br>
        <label for="ocena">Ocena:</label>
        <input type="number" name="ocena" id="ocena" value="' . $res[0]['ocena'] . '">
        <br>
        <input type="submit" value="Zatwierdź">';
    ?>
    
</body>
</html>