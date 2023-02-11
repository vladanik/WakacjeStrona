<?php

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$dbh = 'UPDATE `hotele` SET `img_src` = :imgsrc, `nazwa` = :nazwa, `lokalizacja` = :loc, `skr_opis` = :skropis, `opis` = :opis, `cena` = :cena, `gwiazdy` = :gwiazdy, `ocena` = :ocena WHERE `hotel_id` = :id';
$stmt = $sql->prepare($dbh);
$stmt->bindParam(':imgsrc', $_POST['imgsrc']);
$stmt->bindParam(':nazwa', $_POST['nazwa']);
$stmt->bindParam(':loc', $_POST['loc']);
$stmt->bindParam(':skropis', $_POST['skropis']);
$stmt->bindParam(':opis', $_POST['opis']);
$stmt->bindParam(':cena', $_POST['cena']);
$stmt->bindParam(':gwiazdy', $_POST['gwiazdy']);
$stmt->bindParam(':ocena', $_POST['ocena']);
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

header('Location: hotele-db.php');

?>