<?php 
	session_start();
	$arquivo = 'usuarios.xml';
	$xml = simplexml_load_file($arquivo);
	for($i=0; $i<count($xml->usuario); $i++) {
		$usuario = $xml->usuario[$i]->usuario;
		$senha = $xml->usuario[$i]->password;
		if($_POST["usuario"]==$usuario && $_POST["password"]==$senha){
			$_SESSION["usuario"] = $usuario; 
			header("location:saldo.php");
		}
	}
	echo "Usuário ou Senha incorretos...<br />";
	echo "<a href = '../index.php'>Tente novamente</a>";
?>