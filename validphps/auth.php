<?php

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$psw = filter_var(trim($_POST['psw']), FILTER_SANITIZE_STRING);

$hash = md5($psw."hbfkjeht4ui5");

$sql = new mysqli('localhost', 'root', '', 'mampieniadze');
$res = $sql->query('SELECT * FROM `klienci` WHERE `email` = "' . $email . '" AND `hash` = "' . $hash . '"');

$user = $res->fetch_assoc();
if (count($user) == 0) {
    echo '<div class="alert alert-danger" role="alert">
            Niepoprawny email lub hasło.
        </div>';
    exit();
}

if ($email == 'admin') {
    setcookie('admin', $user['id'], time() + 3600 * 24, "/");
    $sql->close();
    header('Location: ../admin/adminchoose.php');
} else {
    setcookie('user', $user['id'], time() + 3600 * 24, '/');
    $sql->close();
    header("Location: ../zalogowany.php");
}

?>