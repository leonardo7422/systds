<?php

	include "classeProduto.php";

	class Aluno extends Produto{		
		public $validade;
        

		public function __construct($vetor){
			parent::__construct($vetor);
			$this->validade = $vetor["validade"];
        }	
        

		function exibe(){
			
			$this->exibe_pessoa();
			
			echo    "<div>	
						<label>Validade:</label> ".$this->Validade."
					</div>											
			  </fieldset>";
		}
		 function exibe_tr(){
			
			$this->exibeproduto_tr();
			
            echo "
              <tr>
				<td>".$this->validade."</td>

                </tr>";
        }
	}
	

?>