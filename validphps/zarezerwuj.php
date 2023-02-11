<?php

$hotel_id = $_GET['id'];
$klient_id = $_COOKIE['user'];

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$dbh = 'INSERT INTO `rezerwacje` (`hotel_id`, `klient_id`) VALUES (:hotel_id, :klient_id)';
$stmt = $sql->prepare($dbh);
$stmt->bindParam(':hotel_id', $hotel_id);
$stmt->bindParam(':klient_id', $klient_id);
$stmt->execute();

echo 'Dziękujemy! Twoja rezerwacja została złożona. <a href="../kierunek.php?id=' . $hotel_id . '">Wróc</a>';


?>