<?php

	include "classePessoa.php";

	class Aluno extends Pessoa{		
		public $area;
		public $salario;

		public function __construct($vetor){
			parent::__construct($vetor);
			$this->area = $vetor["area"];
			$this->salario = $vetor["salario"];
        }	
        

		function exibe(){
			
			$this->exibe_pessoa();
			
			echo    "<div>	
						<label>Área:</label> ".$this->area."
					</div>						
					<div>	
						<label>Salário:</label> ".$this->salario."
					</div>						
			  </fieldset>";
		}
		 function exibe_tr(){
			
			$this->exibepessoa_tr();
			
            echo "
              <tr>
				<td>".$this->area."</td>
				<td>".$this->salario."</td>
                </tr>";
        }
	}
	

?>