<?php

    include("ClasseProduto.php");
    session_start();
    echo"<p><a href=\"form_produto.php\"> Cadastros de Produtos</a> | 
        <p><a href=\"form_pessoa.php\"> Cadastros de Pessoa</a> |
        <p><a href=\"listar_pessoas.php\"> Lista Pessoas</a> |
        <a href=\"listar_produtos.php\"> lista Produtos</a>
        <p> ";
    
?>
             <div classi="center">
            <table class="tabela1" width="40%" border="2">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Unidade</th>
                    <th>Preco</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach($_SESSION["produto"] as $i=>$p)
                {
                    $p->exibicao_tabela();

                }
                ?>
            
            </tbody>
            </table>
            </div>