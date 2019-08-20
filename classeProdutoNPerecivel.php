<?php

	include "classeProduto.php";

	class Aluno extends Produto{		

        

		public function __construct($vetor){
			parent::__construct($vetor);
        }	
        

		function exibe(){
			
			$this->exibe_produto();
			
		}
		 function exibe_tr(){
			
			$this->exibeproduto_tr();
			
        }
	}
	

?>