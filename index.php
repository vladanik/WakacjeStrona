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
        
        <link href="css/style.css?<?echo time();?>" rel="stylesheet">
        
        <title>MamPieniadze.pl</title>
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
                            <a class="nav-link active" aria-current="page" href="index.php">Główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="wakacje.php">Wakacje</a>
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
                    <h1>Zaczynamy tutaj!</h1>
                    <form class="form-inline" method="get" action="wakacje.php">
                        <input type="text" id="filter-location" placeholder="Kierunek" name="location">
                        <button class="btn btn-outline-success" type="submit">Szukaj</button>
                    </form>
                </div>
            </div>
            <div class="slides">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="source/carousel1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Wycieczki i wakacje</h5>
                                <p>Na każdy portfel i nastrój</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="source/carousel2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Spędzisz wieczór nad morzem?</h5>
                                <p>Czy nawet na głębi!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="source/carousel3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>ZEA czy Egipt?</h5>
                                <p>Ty decydujesz, gdzie będzisz jutro!</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="content">
                <div class="content-container content-1">
                    <h1>Może gdzieś wiosną polecisz?</h1>
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <?php
                        
                        $sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
                        $sql->query("SET NAMES utf8");
                        $res = $sql->query('SELECT * FROM `hotele`');
                        $tab = $res->fetchAll();
                        $len = $res->rowCount();
                        for ($i = 0; $i < 3; $i++) {
                            $rid = rand(0, $len - 1);
                            $imagelink = filter_var($tab[$rid]['img_src'], FILTER_SANITIZE_STRING);
                            $hotelname = $tab[$rid]['nazwa'];
                            $opis = $tab[$rid]['skr_opis'];
                            $price = $tab[$rid]['cena'];
                            $id = $tab[$rid]['hotel_id'];
                            echo '<div class="content-item">
                            <div class="card" style="width: 18rem;">
                                <img src="'. $imagelink .'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">'. $hotelname .'</h5>
                                    <p class="card-text">' . $opis .'</p>
                                    <a href="kierunek.php?id='. $id .'" class="btn btn-primary">Przejdź</a>
                                </div>
                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="content-container content-2">
                    <h1 style="text-align: right;">Inspiracje na lato!</h1>
                    <div class="row row-cols-1 row-cols-md-3 g-4"> 

                    <?php
                        
                        $sql = new PDO("mysql:host=localhost;dbname=mampieniadze", 'root', '');
                        $sql->query("SET NAMES utf8");
                        $res = $sql->query('SELECT * FROM `hotele`');
                        $tab = $res->fetchAll();
                        $len = $res->rowCount();
                        for ($i = 0; $i < 3; $i++) {
                            $rid = rand(0, $len - 1);
                            $imagelink = filter_var($tab[$rid]['img_src'], FILTER_SANITIZE_STRING);
                            $hotelname = $tab[$rid]['nazwa'];
                            $opis = $tab[$rid]['skr_opis'];
                            $price = $tab[$rid]['cena'];
                            $id = $tab[$rid]['hotel_id'];
                            echo '<div class="content-item">
                            <div class="card" style="width: 18rem;">
                                <img src="'. $imagelink .'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">'. $hotelname .'</h5>
                                    <p class="card-text">' . $opis .'</p>
                                    <a href="kierunek.php?id='. $id .'" class="btn btn-primary">Przejdź</a>
                                </div>
                            </div>
                        </div>';
                        }
                        ?>

                    </div>
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
                    <div class="modal-dialog modal-dialog-centered modal fade" tabindex="-1" id="zapisac-email" aria-hidden="true">
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