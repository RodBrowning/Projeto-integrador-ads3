<?php date_default_timezone_set('America/Sao_Paulo'); setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');?>

<div class="col-md-11 marginAuto mt-3 mb-4">
	<fieldset>
		<legend>Nova Entrada</legend>
			<form>
				<div class="col-md-11 marginAuto divLancamento">
					<div class="display-block">
						<p class="display-inline-block">Placa:</p>
						<input class="display-inline-block" onkeypress="ngModelEntradaPlaca(id)" type="text" maxlength="8" size="8"  id="placa">
					</div>
					<div class="display-block">
						<p class="display-inline-block">Nome Motorista:</p>
						<input class="display-inline-block" onkeypress="ngModelEntradaNomeMotorista(id)" type="text" maxlength="30" size="30" id="nomeMotorista">
					</div>
				</div>
			</form>
			<hr class="linhaPreta">
			<div class="col-md-11 marginAuto divLancamento marginAuto">
				<div>
					<p class="display-inline-block">Placa:</p>
					<p class="display-inline-block" id="showPlaca"></p>	
				</div>
				<div>
					<p class="display-inline-block">Nome Motorista:</p> 					
					<p class="display-inline-block" id="showMotorista"></p>
					
				</div>
				<div>
					<p class="display-inline-block">Horario da entrada:</p>
					<p class="display-inline-block"><?php echo strftime('%d/%b/%y - %H:%M');?></p>
				</div>
				<div>
					<p class="display-inline-block">Funcionario:</p>
					<p class="display-inline-block">Renilson</p>
				</div>
				<button onclick="closePopUp()" class="my-btn my-btn-danger mb-3">Cancelar</button>				
				<button onclick="validarDadosEntradaVeiculo()" class="my-btn my-btn-success mb-3">Resistrar</button>				
				
			</div>
	</fieldset>
</div>