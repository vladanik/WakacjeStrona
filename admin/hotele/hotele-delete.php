<?php

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$dbh = 'DELETE FROM `hotele` WHERE `hotel_id` = ' . $_GET['id'];
$stmt = $sql->prepare($dbh);
$stmt->execute();

header('Location: hotele-db.php');

?>