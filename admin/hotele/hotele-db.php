<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotele | Admin</title>
</head>
<body>
    <p><a href="hotele-dodaj.php">Dodaj</a></p>
<table>
    <tr>
        <th>ID</th>
        <th>Nazwa</th>
        <th>Edytuj</th>
        <th>Usuń</th>
    </tr>

<?php

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$res = $sql->query("SELECT * FROM `hotele`");
$tab = $res->fetchAll();
foreach ($tab as $row) {
    echo '<tr>
            <td>' . $row['hotel_id'] . '</td>
            <td>' . $row['nazwa'] . '</td>
            <td><a href="hotele-edit.php?id=' . $row['hotel_id'] . '">Edytuj</a></td>
            <td><a href="hotele-delete.php?id=' . $row['hotel_id'] . '">Usuń</a></td>
        </tr>';
}

?>

</table>
<p><a href="../adminchoose.php">Wróć</a></p>
</body>
</html>

