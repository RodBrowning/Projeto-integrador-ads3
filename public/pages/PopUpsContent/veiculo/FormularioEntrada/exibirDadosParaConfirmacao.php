<?php require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/UtilFunctionsPhp.php"); 
	
	$placa = $_REQUEST['placa'];
	$nomeMotorista = $_REQUEST['nomeMotorista'];
?>
	
	<fieldset class="col-md-12">
		<legend ">Confirmação</legend>
		<div class="successMessage divLancamento mb-3">
			<!-- Função "mask()" mascara a string inserindo pontuações-->
			<h5>Confirme a placa: <br /> <b><?php echo mask($placa,'###-####');?></b></h5>
			<h5>Confirme o nome do motorista: <br /> <b><?php echo $nomeMotorista;?></b></h5>
			
			<div style="padding: 5px">
				<button type="button" autofocus class="my-btn my-btn-success" onclick="verificarDiasPagos('<?php echo $placa;?>','<?php echo $nomeMotorista;?>')">OK</button>
				<button class="my-btn my-btn-danger" onclick="closePopUp()">Cancelar</button>
			</div>
		</div>
	</fieldset>
