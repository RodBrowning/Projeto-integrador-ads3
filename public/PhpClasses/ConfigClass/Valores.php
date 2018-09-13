<?php

USE function CRUD\connect as conn;

class Valores{
	
	/// Selects here
	

	/// Inserts here
	

	/// Updates here
	public function updateValoresHoras($primeiraHora,$demaisHoras)
		{
			$query = "UPDATE `valores` SET `primeira_hora`=$primeiraHora,`demais_horas`=$demaisHoras WHERE id_func = 1";
			$con = conn();
			mysqli_query($con,$query);
			mysqli_close($con);
		}

	public function updateValoresDiario($valorDiario)
		{
			$query = "UPDATE `valores` SET `diaria`=$valorDiario WHERE id_func = 1";
			$con = conn();
			mysqli_query($con,$query);
			mysqli_close($con);
		}

	public function updateValoresMensal($valorMensal)
		{
			$query = "UPDATE `valores` SET `mensal`=$valorMensal WHERE id_func = 1";
			$con = conn();
			mysqli_query($con,$query);
			mysqli_close($con);
		}

	/// Consulta valores dos planos
	public function buscaValores()
		{
			$query = "SELECT * FROM `valores` limit 1";
			$con = conn();
			$row = mysqli_query($con, $query);
			mysqli_close($con);
			return $row;
		}
}

?>
