<?php


require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/Connection.php");
USE function CRUD\connect as conn;



class Funcionario{
	
	public function inserirNovoFuncionario($nome_func, $cpf, $tipo_acesso, $email, $senha){	
		$query = "INSERT INTO `funcionarios` (`id_func`, `nome_func`, `cpf`, `tipo_acesso`, `email`, `senha`, `ativo`, `logado`) VALUES (NULL, '$nome_func', '$cpf', '$tipo_acesso', '$email', '$senha', '0', '0');";
		
		$data = mysqli_query(conn(), $query);
	}	

	public function buscaFuncionariosAtivos(){
		$query = "SELECT * FROM `funcionarios` WHERE ativo = 1";		
		
		$data = mysqli_query(conn(), $query);
		return $data;
	}

	public function buscaFuncionariosInativos(){
		$query = "SELECT * FROM `funcionarios` WHERE ativo = 0";
		
		$data = mysqli_query(conn(), $query);
		return $data;
	}

	public function desativarFuncionario($id_func){
		$query = "UPDATE `funcionarios` SET `ativo`= 0 WHERE id_func = $id_func";
		
		$data = mysqli_query(conn(), $query);
	}

	public function ativarFuncionario($id_func){
		$query = "UPDATE `funcionarios` SET `ativo`= 1	 WHERE id_func = $id_func";
		
		$data = mysqli_query(conn(), $query);
	}
}

?>

