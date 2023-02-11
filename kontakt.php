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
        
        <title>Kontakt | MamPieniadze.pl</title>
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
                            <a class="nav-link" href="wakacje.php">Wakacje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="opinie.php">Opinie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="kontakt.php">Kontakt</a>
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
            <h1 class="kontakt-title page-title">Skontaktuj się z nami!</h1>
            <hr>
            <div class="kontakt-content page-content">
                <div class="repying-form">
                    <form action="admin/kontakt/kontakt-todb.php" method="post">
                        <label for="imie">Imię</label>
                        <input type="text" id="imie" name="imie" placeholder="Imię">
                        <label for="nazwisko">Nazwisko</label>
                        <input type="text" id="nazwisko" name="nazwisko" placeholder="Nazwisko">
                        <label for="email">E-mail lub numer telefonu</label>
                        <input type="text" id="email" name="email" placeholder="E-mail lub numer telefonu" required>
                        <label for="wiadomosc">Twoje pytanie</label>
                        <textarea id="wiadomosc" name="wiadomosc" placeholder="Napisz o czym chciałbyś/chciałabyś zapytać..." style="height:200px" required></textarea>
                        <input type="submit" name="submit" value="Wyślij">
                    </form>
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