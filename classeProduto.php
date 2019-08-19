<?php

class produto{

public $nome;
public $descricao;
public $tipo;
public $unidade;
public $preco;


        function __construct($vetor)
        {
            $this->nome = $vetor["nome"];
            $this->descricao = $vetor["descricao"];;
            $this->tipo = $vetor["tipo"];;
            $this->unidade = $vetor["unidade"];;
            $this->preco = $vetor["preco"];;
        }
        function exibicao_unitaria()
        {
            echo"<fieldset>
                <div>
                <label>Nome:</label>".$this->nome."  
                </div>          

                <div>
                <label>Email:</label>".$this->descricao."  
                </div>  

                <div>
                <label>CPF:</label>".$this->tipo."  
                </div>  

                <div>
                <label>Sexo:</label>".$this->unidade."  
                </div>  

                <div>
                <label>Nasc:</label>".$this->preco."  
                </div>  
            </fieldset>
            ";
        }
        function exibicao_tabela()
        {
            
            echo "
              <tr>
                <td>".$this->nome."</td>
                <td>".$this->descricao."</td>
                <td>".$this->tipo."</td>
                <td>".$this->unidade."</td>
                <td>".$this->preco."</td>
                </tr>";
        }
    

      
}
?>