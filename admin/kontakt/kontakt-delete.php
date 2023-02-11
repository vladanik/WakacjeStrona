<?php

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$dbh = 'DELETE FROM `kontakt` WHERE `id` = ' . $_GET['id'];
$stmt = $sql->prepare($dbh);
$stmt->execute();

header('Location: kontakt-db.php');

?>