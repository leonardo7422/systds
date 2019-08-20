<?php
class Pessoa{
	public $nome;
	public $email;
	public $cpf;
	public $sexo;
	public $data_nascimento;
	
	
	function __construct($vetor){
		$this->cpf = $vetor["cpf"];
		$this->nome = $vetor["nome"];
		$this->email = $vetor["email"];
		$this->sexo = $vetor["sexo"];
		$this->data_nascimento = $vetor["data_nascimento"];
		$this->endereco = $vetor["endereco"];
		$this->cidade = $vetor["cidade"];
		$this->estado = $vetor["estado"];
		$this->pais = $vetor["pais"];
	}
	

	function exibe_pessoa(){
		echo "<fieldset>
					<div>
						<label>CPF:</label> ".$this->cpf."
					</div>
					<div>
						<label>Email:</label> ".$this->nome."
					</div>
					<div>
						<label>E-mail:</label> ".$this->email."
					</div>
					<div>	
						<label>Sexo:</label> ".$this->sexo."
					</div>
					<div>	
						<label>Data Nasc:</label> ".$this->data_nascimento."
					</div>
					<div>	
						<label>Endereço:</label> ".$this->endereco."
					</div>
					<div>	
						<label>Cidade:</label> ".$this->cidade."
					</div>
					<div>	
						<label>Estado:</label> ".$this->estado."
					</div>
					<div>	
						<label>País:</label> ".$this->pais."
					</div>
			  </fieldset>";
	}
	
	function exibepessoa_tr(){
		echo "<tr>
				<td>".$this->cpf."</td>
				<td>".$this->nome."</td>
				<td>".$this->email."</td>
				<td>".$this->sexo."</td>
				<td>".$this->data_nascimento."</td>
				<td>".$this->endereco."</td>
				<td>".$this->cidade."</td>
				<td>".$this->estado."</td>
				<td>".$this->pais."</td>
			  </tr>";
	}

}
?>




















<?php
/*

*/
?>