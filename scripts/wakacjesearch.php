<?php

$qu = "";
//$eat = array("all", "hb", "bb");
//$stars = array(2, 3, 4, 5);




function addWhere($where, $add, $and = true) {
    if ($where) {
        if ($and) {
            $where .= " AND $add";
        } else {
            $where .= " OR $add";
        }
    } else {
        $where = $add;
    }
    return $where;
}

if (!empty($_POST['filtergo'])) {
    $where = "";
    if (isset($_POST["cena-od"]) && $_POST["cena-od"] >= 0) $where = addWhere($where, "`cena` >= '".htmlspecialchars($_POST["cena-od"]))."'";
    if (isset($_POST["cena-do"]) && $_POST["cena-do"] >= 0) $where = addWhere($where, "`cena` <= '".htmlspecialchars($_POST["cena-do"]))."'";
    if (isset($_POST["eat"])) $where = addWhere($where, "`wyzywienie` IN (".htmlspecialchars(implode(",", $_POST["eat"])).")");
    if (isset($_POST["stars"])) $where = addWhere($where, "`gwiazdy` IN (".htmlspecialchars(implode(",", $_POST["stars"])).")");

    $qu = "SELECT * FROM `hotele`";
    if ($where) {
        $qu .= " WHERE $where";
    }
}

$sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
$sql->query("SET NAMES utf8");
echo $qu;
$res1 = $sql->prepare($qu);
$res1->execute();
$tab1 = $res1->fetchAll();

?>