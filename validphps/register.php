<?php

$imie = filter_var(trim($_POST['imie']), FILTER_SANITIZE_STRING);
$nazwisko = filter_var(trim($_POST['nazwisko']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$psw = filter_var(trim($_POST['psw']), FILTER_SANITIZE_STRING);

if (mb_strlen($imie) > 20) {
    echo '<div class="alert alert-danger" role="alert">
            Imię jest za długie.
        </div>';
    exit();
} else if (mb_strlen($nazwisko) > 30) {
    echo '<div class="alert alert-danger" role="alert">
            Nazwisko jest za długie.
        </div>';
    exit();
} else if (mb_strlen($tel) != 9) {
    echo '<div class="alert alert-danger" role="alert">
            Numer telefonu jest nieprawidłowy.
        </div>';
    exit();
}

$hash = md5($psw."hbfkjeht4ui5");

$sql = new mysqli('localhost', 'root', '', 'mampieniadze');
$sql->query('INSERT INTO `klienci` (`imie`, `nazwisko`, `email`, `telnum`, `hash`) VALUES ("' . $imie . '", "' . $nazwisko . '", "' . $email . '", "' . $tel . '", "' . $hash . '")');

$id = $sql->query('SELECT `id` FROM `klienci` WHERE `email` = "' . $email . '"');

$sql->close();

header("Location: ../logowanie.php");

?>