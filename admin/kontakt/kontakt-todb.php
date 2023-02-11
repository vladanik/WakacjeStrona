<?php

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$statement = $sql->prepare("INSERT INTO `kontakt` (`imie`, `nazwisko`, `num`, `wiadomosc`) VALUES (:imie, :nazwisko, :email, :wiadomosc)");
$statement->bindParam(':imie', $_POST['imie']);
$statement->bindParam(':nazwisko', $_POST['nazwisko']);
$statement->bindParam(':email', $_POST['email']);
$statement->bindParam(':wiadomosc', $_POST['wiadomosc']);
$statement->execute();

header('Location: ../../kontakt.php');
echo "
<script>
alert('Wiadomość została wysłana!');
</script>";

?>