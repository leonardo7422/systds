<?php

	include "classePessoa.php";

	class Aluno extends Pessoa{		

        

		public function __construct($vetor){
			parent::__construct($vetor);
        }	
        

		function exibe(){
			
			$this->exibe_pessoa();
			
		}
		 function exibe_tr(){
			
			$this->exibepessoa_tr();
			
        }
	}
	

?>