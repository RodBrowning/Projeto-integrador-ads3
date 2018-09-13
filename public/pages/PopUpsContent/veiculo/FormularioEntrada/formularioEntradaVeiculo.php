<?php date_default_timezone_set('America/Sao_Paulo'); setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');?>

<div class="col-md-12 marginAuto">
	<fieldset>
		<legend>Nova Entrada</legend>
			<form>
				<div class="col-md-11 marginAuto divLancamento">
					<div class="display-block">
						<p class="display-inline-block">Placa:</p>
						<input class="display-inline-block" onkeyup="ngModelEntradaPlaca(id)" type="text" maxlength="8" size="8"  id="placa">
					</div>
					<div class="display-block">
						<p class="display-inline-block">Nome Motorista:</p>
						<input class="display-inline-block width-input-3" onkeyup="ngModelEntradaNomeMotorista(id)" type="text" maxlength="30" size="30" id="nomeMotorista">
					</div>
				</div>
			</form>
			<hr class="linhaPreta">
			<div class="col-md-11 marginAuto divLancamento marginAuto mb-3">
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
				<button onclick="closePopUp()" class="my-btn my-btn-danger">Cancelar</button>				
				<button onclick="validarDadosEntradaVeiculo()" class="my-btn my-btn-success">Resistrar</button>				
				
			</div>
	</fieldset>
</div>