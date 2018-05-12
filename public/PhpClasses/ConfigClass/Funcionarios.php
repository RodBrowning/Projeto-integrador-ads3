<?php


require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/Connection.php");
USE function CRUD\connect as conn;



class Funcionario{
	
	public function inserirNovoFuncionario($nome_func, $cpf, $tipo_acesso, $email, $senha){	
		$query = "INSERT INTO `funcionarios` (`id_func`, `nome_func`, `cpf`, `tipo_acesso`, `email`, `senha`, `ativo`, `logado`) VALUES (NULL, '$nome_func', '$cpf', '$tipo_acesso', '$email', '$senha', '0', '0');";
		
		$data = mysqli_query(conn(), $query);
	}	

	public function buscaFuncionarios($column, $permissao ,$order){
		$query = "SELECT * FROM `funcionarios` WHERE ativo = $permissao ORDER BY $column $order";

		$data = mysqli_query(conn(), $query);
		return $data;
	}

	public function permissaoFuncionario($id_func,$permissao){
		$query = "UPDATE `funcionarios` SET `ativo`= $permissao WHERE id_func = $id_func";
		
		$data = mysqli_query(conn(), $query);
	}

}

?>

