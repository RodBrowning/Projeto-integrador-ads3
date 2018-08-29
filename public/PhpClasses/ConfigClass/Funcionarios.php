<?php

USE function CRUD\connect as conn;

class Funcionario{
	
	/// Selects here
	public function buscaFuncionarios($column, $order, $permission){
		$query = "SELECT * FROM `funcionarios` WHERE ativo = $permission ORDER BY $column $order";
		
		return mysqli_query(conn(), $query);
	}

	/// Inserts here
	public function inserirNovoFuncionario($nome_func, $cpf, $tipo_acesso, $email, $senha){	
		$query = "INSERT INTO `funcionarios` (`id_func`, `nome_func`, `cpf`, `tipo_acesso`, `email`, `senha`, `ativo`, `logado`) VALUES (NULL, '$nome_func', '$cpf', '$tipo_acesso', '$email', '$senha', '0', '0')";
		
		mysqli_query(conn(), $query);
	}	

	/// Updates here
	public function permissaoFuncionario($id_func,$permission){
		$query = "UPDATE `funcionarios` SET `ativo`= $permission WHERE id_func = $id_func";
		
		mysqli_query(conn(), $query);		
	}

	/// Verificar se CPF existe
	public function CPFExiste($cpf){
		$query = "SELECT * from funcionarios WHERE cpf = $cpf";
		$row = mysqli_query(conn(),$query);

		if(mysqli_num_rows($row) > 0){
			return true;
		}else{
			return false;
		}
	}
	/// Verificar se Email existe
	public function emailExiste($email){
		$query = "SELECT * FROM `funcionarios` WHERE email = $email";
		$row = mysqli_query(conn(),$query);
		if(mysqli_num_rows($row) > 0){
			return true;
		}else{
			return false;
		}
	}

}

?>

