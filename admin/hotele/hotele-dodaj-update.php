<?php

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$dbh = 'INSERT INTO `hotele` (`img_src`, `nazwa`, `lokalizacja`, `skr_opis`, `opis`, `wyzywienie`, `cena`, `gwiazdy`, `ocena`) VALUES (:imgsrc, :nazwa, :loc, :skropis, :opis, :wyzywienie, :cena, :gwiazdy, :ocena)';
$stmt = $sql->prepare($dbh);
$stmt->bindParam(':imgsrc', $_POST['imgsrc']);
$stmt->bindParam(':nazwa', $_POST['nazwa']);
$stmt->bindParam(':loc', $_POST['loc']);
$stmt->bindParam(':skropis', $_POST['skropis']);
$stmt->bindParam(':opis', $_POST['opis']);
$stmt->bindParam(':wyzywienie', $_POST['wyzywienie']);
$stmt->bindParam(':cena', $_POST['cena']);
$stmt->bindParam(':gwiazdy', $_POST['gwiazdy']);
$stmt->bindParam(':ocena', $_POST['ocena']);
$stmt->execute();

header('Location: hotele-db.php');

?>