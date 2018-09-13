<?php

USE function CRUD\connect as conn;

class Veiculo{

	/// Consulta se o veiculo já esta no pátio.
	public function veiculoAberto($placa){
		$query = "SELECT dt_saida FROM `entrada_saida` WHERE placa = '$placa' AND dt_saida || null limit 1";
		$con = conn();
		$row = mysqli_query(conn(),$query);
		$numRows = mysqli_num_rows($row);
		if($numRows > 0){			
			return true;
		}else{
			return false;
		}
		mysqli_close($con);
	}

	/// Consulta de o veiculo tem dias pagos
	public function verificarDiasPagos($placa){
		$query = "SELECT * from entrada_saida WHERE placa = '$placa' and pago_ate > CURRENT_TIMESTAMP limit 1";
		$row = mysqli_query(conn(),$query);
		$numRows = mysqli_num_rows($row);
		if($numRows > 0){
			return true;
		}else{
			return false;
		}
		mysqli_close($con);
	}

	

}


/*INSERT INTO `entrada_saida` (`id_operacao`, `placa`, `motorista`, `dt_entrada`, `id_func_entrada`, `dt_saida`, `id_func_saida`, `valor`, `pago_ate`) VALUES (NULL, 'grt9876', 'Diego Souza', CURRENT_TIMESTAMP, '44', NULL, NULL, NULL, NULL);*/

?>

