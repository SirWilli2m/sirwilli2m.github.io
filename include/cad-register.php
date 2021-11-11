<?php

$timeTarget = 0.01;

do{
	$start = microtime(true);
	$nome = hash('sha256', $_POST['nome_cad']);
	$email = hash('sha256', $_POST['email_cad']);
	$senha = hash('SHA256', $_POST['senha_cad']);
	$confirma_senha = hash('SHA256', $_POST['senha_cad2']);
	$end = microtime(true);
} while (($end - $start) < $timeTarget);

if($senha === $confirma_senha){
	echo"<script language='javascript' type='text/javascript'>
        alert('Cadastro realizado');window.location.href='../index.php'</script>";
}else{
	echo"<script language='javascript' type='text/javascript'>
        alert('Senhas não Coincidem');window.location.href='../paginas/login.php'</script>";
}

?>