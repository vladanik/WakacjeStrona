<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezerwacje | Admin</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>HotelID</th>
        <th>KlientID</th>
        <th>Usuń</th>
    </tr>

<?php

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$res = $sql->query("SELECT * FROM `rezerwacje`");
$tab = $res->fetchAll();
foreach ($tab as $row) {
    echo '<tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['hotel_id'] . '</td>
            <td>' . $row['klient_id'] . '</td>
            <td><a href="rezerw-delete.php?id=' . $row['id'] . '">Usuń</a></td>
        </tr>';
}

?>

</table>
<p><a href="../adminchoose.php">Wróć</a></p>
</body>
</html>