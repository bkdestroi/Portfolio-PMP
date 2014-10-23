<?php
class Usuario{
	private $nome;
	private $email;
	private $senha;
	private $id;
	
	public function setSenha($senha){
		$this->senha =$senha;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	
	public function setId($id){
		$this->id=$id;
	}
	
	public function getId(){
		return $this->id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}
}
// 	$objeto = new Usuario;
// 	$objeto->setNome("Lucas");
	

// // vamos agora passar este objeto para uma função PHP
// imprimirCliente($c);

// // e aqui está a função que recebe o objeto da classe Cliente
// // e exibe o valor de suas variáveis
// function imprimirCliente($cliente){
// 	echo "Nome: " . $cliente->getNome() . "<br>
//       E-Mail: " . $cliente->getEmail();
// }	
	
	
?>