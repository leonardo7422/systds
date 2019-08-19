<?php


echo"<p><a href=\"form_produto.php\"> Cadastros de Produtos</a> | 
        <p><a href=\"form_pessoa.php\"> Cadastros de Pessoa</a> |
        <p><a href=\"listar_pessoas.php\"> Lista Pessoas</a> |
        <a href=\"listar_produtos.php\"> lista Produtos</a>
        <p> ";
include("ClasseProduto.php");


//$n = $_POST["nome"];
//$e= $_POST["email"];
//$c = $_POST["cpf"];
//$s = $_POST['sexo'];
//$d = $_POST['nasc'];

$p = new produto($_POST);

session_start();

$_SESSION['produto'][] = $p;

echo"Pessoa cadastrada com sucesso";
$p->exibicao_unitaria();
 
?>
