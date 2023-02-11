<!DOCTYPE html>

<html lang="pl">
    <head>
        <meta charset="utf-8">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        
        <title>Wakacje | MamPieniadze.pl</title>
    </head>
    <body>
        <header class="navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">MamPieniądze</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="wakacje.php">Wakacje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="opinie.php">Opinie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontakt.php">Kontakt</a>
                        </li>

                        <?php if($_COOKIE['user'] == ''): ?>

                        <li class="nav-item">
                            <button type="button" class="btn btn-primary" onclick="window.location.href = 'logowanie.php'">Zaloguj się</button>
                        </li>

                        <?php else: ?>

                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="zalogowany.php">Moje konto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rezerwacje.php">Moje rezerwacje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="validphps/exit.php">Wyloguj</a>
                        </li>     
                        
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </header>
        <nav>
            
        </nav>
        <main>
            <div class="search-filter">
                <div class="search-filter-container">
                    <form class="form-inline" method="get" action="wakacje.php">
                        <input type="location" id="filter-location" placeholder="Kierunek" name="location">
                        <button class="btn btn-outline-success" type="submit">Szukaj</button>
                    </form>
                </div>
            </div>
            <h1 class="wakacje-title page-title">Wakacje <?php if (isset($_GET['location']) && $_GET['location'] != '') { echo 'w '. strtoupper($_GET['location']);} ?></h1>
            <hr>
            <div class="content-wakacje page-content">
                <div class="items filters">
                    <h2>Filtrowanie</h2>
                    <hr>
                    <form action="wakacje.php" method="get">
                        <div class="filter-items filter-0">
                            <h3>Kierunek</h3>
                            <label>
                                <input type="text" name="location" placeholder="Kierunek">
                            </label>
                        </div>
                        <hr>
                        <div class="filter-items filter-1">
                            <h3>Wyżywienie</h3>
                            <label>
                                <input type="radio" name="eat" value="all"> All Inclusive
                            </label>
                            <label>
                                <input type="radio" name="eat" value="hb"> Śniadania i obiadokolacje (HB)
                            </label>
                            <label>
                                <input type="radio" name="eat" value="bb"> Śniadania (BB)
                            </label>
                        </div>
                        <hr>
                        <div class="filter-items filter-2">
                            <h3>Standard hotelu</h3>
                            <label>
                                <input type="radio" name="stars" value="5"> 5 gwiazd
                            </label>
                            <label>
                                <input type="radio" name="stars" value="4"> 4 gwiazdy i więcej
                            </label>
                            <label>
                                <input type="radio" name="stars" value="3"> 3 gwiazdy i więcej
                            </label>
                            <label>
                                <input type="radio" name="stars" value="2"> 2 gwiazdy i więcej
                            </label>
                        </div>
                        <hr>
                        <div class="filter-items filter-3">
                            <h3>Cena</h3>
                            <label>
                                <input type="number" name="cena-od" placeholder="od"> 
                            </label>
                            <span> - </span>
                            <label>
                                <input type="number" name="cena-do" placeholder="do"> 
                            </label>
                        </div>
                        <hr>
                        <input type="submit" name="filtergo" class="btn btn-primary" value="Filtruj">
                    </form>
                </div>
                <div class="items cards">

                            <?php
                                $sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
                                $sql->query("SET NAMES utf8");
                                $qu = "";

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
                                
                                if (!empty($_GET['filtergo'])) {
                                    $where = "";
                                    if (isset($_GET['location']) && $_GET['location'] != '') {
                                        $where = addWhere($where, "`lokalizacja` = '".$_GET['location']."' ");
                                    }
                                    if (isset($_GET["cena-od"]) && $_GET["cena-od"] >= 0  ) {
                                        $where = addWhere($where, "`cena` >= ".htmlspecialchars($_GET["cena-od"]))." ";
                                    }
                                    if (isset($_GET["cena-do"]) && $_GET["cena-do"] >= 0) {
                                        $where = addWhere($where, "`cena` <= ".htmlspecialchars($_GET["cena-do"]))." ";
                                    }
                                    if (isset($_GET['eat'])) {
                                        $where = addWhere($where, "`wyzywienie` = '". htmlspecialchars($_GET['eat'])."' ");
                                    }
                                    if (isset($_GET['stars'])) {
                                        $where = addWhere($where, "`gwiazdy` >= ".htmlspecialchars($_GET['stars'])." ");
                                    }
                                    $qu = "SELECT * FROM `hotele`";
                                    if ($where) {
                                        $qu .= " WHERE $where";
                                    }
                                    
                                }

                                if (isset($_GET['location']) && $_GET['location'] != '') {
                                    $sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
                                    $sql->query("SET NAMES utf8");
                                    $res = $sql->prepare("SELECT * FROM `hotele` WHERE `lokalizacja` = :lokalizacja");
                                    $res->bindValue(':lokalizacja', $_GET['location']);
                                    $res->execute();
                                } else {
                                    $sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
                                    $sql->query("SET NAMES utf8");
                                    $res = $sql->query('SELECT * FROM `hotele`');
                                }
                                if ($qu != "") {
                                    //echo $qu;
                                    $res = $sql->query($qu);
                                }
                                $tab = $res->fetchAll();
                                if (count($tab) == 0) {
                                    echo '<h3>Brak wyników :(</h3>';
                                } else {
                                    foreach ($tab as $row) {
                                        $imagelink = filter_var($row['img_src'], FILTER_SANITIZE_STRING);
                                        $hotelname = $row['nazwa'];
                                        $opis = $row['skr_opis'];
                                        $price = $row['cena'];
                                        $num = $row['hotel_id'];
                                        echo '<div class="card mb-3" style="max-width: 1150px;">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img src="'.$imagelink.'" class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <a class="card-title" href="kierunek.php?id='.$num.'">'.$hotelname.'</a>
                                                    <p class="card-text">'.$opis.'</p>
                                                    <p class="card-text"><small class="text-muted">Aktualizowano '.rand(2, 60).' minut temu</small></p>
                                                    <div class="price">
                                                        <span class="price1">'.$price.' PLN</span>
                                                        <span class="price2"> / '. rand(5, 12) . ' dni</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                }
                            ?>
                </div>
            </div>
        </main>
        <div class="email-container">
            <div class="email-all-form">
                <h1>Zapisz się na nasz newsletter</h1>
                <p>Zostaw nam swój e-mail, a będziemy podsyłać Ci najlepsze!</p>
                <div class="email-area">
                    <input id="email-form" type="email" placeholder="Podaj swój e-mail">
                    <button class="btn btn-outline-success" type="submit" id="email-btn" data-bs-toggle="modal" data-bs-target="#zapisac-email">Zapisz się</button>
                    <div class="modal-dialog modal-dialog-centered modal fade" tabindex="-1" id="zapisac-email" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Udało się</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Teraz jesteś zapisany(-a) na nasz newsletter!</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zamknij</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-container">
            <div class="footer">
                <div class="footer-nav-table-element footer-1">
                       <h1 class="footer-nav-title">MAMPIENIADZE.PL</h1>
                       <a href="#">Pomoc i kontakt</a>
                       <a href="#">Jak rezerwować</a>
                       <a href="#">Polityka prywatności</a>
                       <a href="#">Regulamin</a>
                       <a href="#">Mapa serwisu</a>
                </div>
                <div class="footer-nav-table-element footer-2">
                    <h1 class="footer-nav-title">WSPÓLPRACA</h1>
                    <a href="#">Partnerzy</a>
                    <a href="#">Franczyza</a>
                    <a href="#">Kariera</a>
                </div>
                <div class="footer-nav-table-element footer-3">
                    <h1 class="footer-nav-title">DLA KLIENTÓW</h1>
                    <a href="#">COVID-19</a>
                    <a href="#">Ubezpieczenia</a>
                    <a href="#">Pogoda</a>
                    <a href="#">Parkingi</a>
                    <a href="#">Bony turystyczne</a>
                </div>
                <div class="footer-nav-table-element footer-4">
                    <h1 class="footer-nav-title">KONTAKT</h1>
                    <span>MamPieniadze.pl</span>
                    <span>ul. Jakaś 123</span>
                    <span>15-999 Białystok</span>
                    <span>tel. +48 12 345 67 89</span>
                    <span>fax. +48 98 765 43 21</span>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary" aria-current="page">Instagram</a>
                        <a href="#" class="btn btn-primary">Facebook</a>
                        <a href="#" class="btn btn-primary">Twitter</a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>