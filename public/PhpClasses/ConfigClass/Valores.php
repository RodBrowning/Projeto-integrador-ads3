<?php

USE function CRUD\connect as conn;

class Valores{
	
	/// Selects here
	

	/// Inserts here
	

	/// Updates here
	public function updateValoresHoras($primeiraHora,$demaisHoras)
		{
			$query = "UPDATE `valores` SET `primeira_hora`=$primeiraHora,`demais_horas`=$demaisHoras WHERE id_func = 1";
			return mysqli_query(conn(),$query);
			mysqli_query(conn(), $query);
		}

	public function updateValoresDiario($valorDiario)
		{
			$query = "UPDATE `valores` SET `diaria`=$valorDiario WHERE id_func = 1";
			return mysqli_query(conn(),$query);
			mysqli_query(conn(), $query);
		}

	public function updateValoresMensal($valorMensal)
		{
			$query = "UPDATE `valores` SET `mensal`=$valorMensal WHERE id_func = 1";
			return mysqli_query(conn(),$query);
			mysqli_query(conn(), $query);
		}
}

?>
