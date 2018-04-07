<?php
	session_start();
	$arquivo = 'usuarios.xml';
	$xml = simplexml_load_file($arquivo);
	print_r($_SESSION);
	echo "R$0.00";
?>

<form method = "post" action = "../deposito/deposito">
	<input type = "submit" value = "Depósito" />
</form>

<form method = "post" action = "../saque/saque">
	<input type = "submit" value = "Saque" />
</form>