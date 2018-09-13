<?php
		require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Valores.php");
		require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/connection.php");

		$valores = new Valores();
?>

<div class="col-md-12 marginAuto">
	<fieldset>
		<legend>Selecionar plano</legend>
			<div class="col-md-11 marginAuto text-center mb-3 mt-2">		
				<form>
					<!-- Campo para selecionar plano -->
					<label>Planos:</label>
					<select class="width-select" onchange="visibilidadeCampoQuantidade()" name="plano" id="plano">
					
					<?php $preso = $valores->buscaValores();
					while ($val = mysqli_fetch_array($preso)) { ?>

						  <option value="aberto" selected>Em aberto</option>
						  <option value="<?php echo $val['diaria']?>-diario">Diario</option>
						  <option value="<?php echo $val['mensal']?>-mensal">Mensal</option>

					  <?PHP	} ?>

					</select>

					<!-- Define valores padrão caso não seja plano -->
					<!-- Guarda tipo de plano para passar como parametro da função showPopUpVeiculo()-->
					<input type="hidden" name="tipoPlano" id="tipoPlano" value="aberto">
					<!-- Guarda valor de plano para passar como parametro da função showPopUpVeiculo()-->
					<input type="hidden" name="valorPlano" id="valorPlano" value=0>
					<!-- Guarda valor de plano para passar como parametro da função showPopUpVeiculo()-->
					<input type="hidden" name="quantidadeFinal" id="quantidadeFinal" value=1>

					<div id="div-quantidade" style="display: none">
						<!-- Função JavaScript insere campo quantidade -->
					</div>
				
					<div style="padding: 5px">
						<h4 id="total" style="display: none"><!-- Função JavaScript insere valor total a pagar --></h4>
						<button type="button" autofocus class="my-btn my-btn-success" onclick="showPopUpVeiculo('confirm-plano','<?php echo $_REQUEST["placa"]?>','<?php echo $_REQUEST["nomeMotorista"]?>', valorPlano.value, quantidadeFinal.value, tipoPlano.value)">OK</button>
						<button class="my-btn my-btn-danger" onclick="closePopUp()">Cancelar</button>
					</div>		
				</form>
			</div>
	</fieldset>
</div>