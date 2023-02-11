<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt | Admin</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Email lub numer telefonu</th>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Wiadomość</th>
        <th>Usuń</th>
    </tr>

<?php

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$res = $sql->query("SELECT * FROM `kontakt`");
$tab = $res->fetchAll();
foreach ($tab as $row) {
    echo '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['num'] . '</td>
            <td>' . $row['imie'] . '</td>
            <td>' . $row['nazwisko'] . '</td>
            <td>' . $row['wiadomosc'] . '</td>
            <td><a href="kontakt-delete.php?id=' . $row['id'] . '">Usuń</a></td>
        </tr>';
}

?>

</table>
<p><a href="../adminchoose.php">Wróć</a></p>
</body>
</html>