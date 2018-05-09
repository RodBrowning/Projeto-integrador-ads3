<?php


class Funcionario{

	public function inserirNovoFuncionario($conn, $nome_func, $cpf, $tipo_acesso, $email, $senha){	
			$query = "INSERT INTO `funcionarios` (`id_func`, `nome_func`, `cpf`, `tipo_acesso`, `email`, `senha`, `ativo`, `logado`) VALUES (NULL, '$nome_func', '$cpf', '$tipo_acesso', '$email', '$senha', '0', '0');";
			$conection = $conn;
			$data = mysqli_query($conection, $query);
		}	

	public function buscaFuncionariosAtivos($conn){
		$query = "SELECT * FROM `funcionarios` WHERE ativo = 1";
		$conection = $conn;
		$data = mysqli_query($conection, $query);
		return $data;
	}

	public function buscaFuncionariosInativos($conn){
		$query = "SELECT * FROM `funcionarios` WHERE ativo = 0";
		$conection = $conn;
		$data = mysqli_query($conection, $query);
		return $data;
	}

	public function desativarFuncionario($conn,$id_func){
		$query = "UPDATE `funcionarios` SET `ativo`= 0 WHERE id_func = $id_func";
		$conection = $conn;
		$data = mysqli_query($conection, $query);
	}

	public function ativarFuncionario($conn,$id_func){
		$query = "UPDATE `funcionarios` SET `ativo`= 1	 WHERE id_func = $id_func";
		$conection = $conn;
		$data = mysqli_query($conection, $query);
	}
}

?>

