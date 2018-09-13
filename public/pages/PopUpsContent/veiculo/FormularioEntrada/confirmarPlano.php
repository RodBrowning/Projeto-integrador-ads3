<?php
		$placa = $_REQUEST['placa'];
		$nomeMotorista = $_REQUEST['nomeMotorista'];
		$valorPlano = $_REQUEST['valorPlano'];
		$quantidade = $_REQUEST['quantidade'];
		$plano = $_REQUEST['plano'];


		
?>

<div>
	<fieldset>
		<legend>Selecionar plano</legend>
			<div class="col-md-12 marginAuto text-center mb-3 mt-2">
				<p class="display-inline">Placa: <b><?php echo $placa;?></b></p>
				<p class="display-inline">Nome do motorista: <b><?php echo $nomeMotorista;?></b></p>
				<p class="display-inline">Total a pagar: <b><?php echo ($valorPlano * $quantidade);?></b></p>
				<p class="display-inline">Tipo de plano: <b><?php echo ($plano);?></b></p>
			</div>
	</fieldset>
</div>