<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("classeCliente.php");
		include("cabecalho.php");
		
		$c = new Cliente($_POST);
	
		session_start();
		
		$_SESSION["cliente"][]=$c;
		
		echo "Cliente(a) cadastrado(a) com sucesso!";
		$c->exibe();

	?>
	</body>
</html>