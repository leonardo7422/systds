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
        include("classeProduto.php");
        include("classeProdutoPerecivel.php");
        include("classeProdutoNPerecivel.php");
		include("cabecalho.php");
		
		$p = new Funcionario($_POST);
	
		session_start();
		
		$_SESSION["produto"][]=$p;
		
		echo "Pruduto(a) cadastrado(a) com sucesso!";
		$p->exibe();

	?>
	</body>
</html>