<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
        <article>
               <?php 
              
               echo" <form action=\"cadastra_produto.php\" method=\"POST\">
                    <fieldset>
                         <legend>Cadastro de cliente</legend>
                    <p>
                     <label>Nome:</label>
                    <input type=\"text\" name=\"nome\" size=\"30\"/>
                    <p>
                    <label>Descrição:</label>
                    <input type=\"text\" name=\"descricao\" size=\"50\"/>
                    </p>
                    <p>
                    <label>Tipo:</label>
                    <input type=\"radio\" name=\"tipo\" value=\"perecivel\"/>Perecível
                    <input type=\"radio\" name=\"tipo\" value=\"naoperecivel\"/>Não Perecível
                    </p>
                    <p>
                    <label>Unidade:</label>
                    <input type=\"number\" name=\"unidade\"/>                    
                    </p>
                    <label>Preço:</label>
                    <input type=\"number\" name=\"preco\"/>
                    </p>

                    <input type=\"submit\" value=\"Cadastrar cliente\"/>
                    </fieldset>
            </form>
            <br/>
            <br/>
            <br/>
            </article>";
            
            
        ?>  
    
</body>
</html>