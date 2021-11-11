<?php


$email = hash('sha256', $_POST['email_login']);
$senha = password_hash($_POST['senha_login'], PASSWORD_ARGON2I);


?>