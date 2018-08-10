<?php date_default_timezone_set('America/Sao_Paulo'); setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');?>

<div>
	<fieldset>
		<legend>Novo Crédito</legend>
			<form>
				<div class="col-md-11 marginAuto divLancamento">
					<div class="display-block">
						<p class="display-inline-block">Valor do crédito:</p>
						<input class="display-inline-block" onkeyup="ngModelCaixa(id)" type="number" id="valorCredito">
					</div>					
				</div>
			</form>
			<hr class="linhaPreta">
			<div class="col-md-11 marginAuto divLancamento marginAuto">
				<div>
					<p class="display-inline-block">Funcionario:</p>
					<p class="display-inline-block">Carlos</p>	
				</div>
				<div>
					<p class="display-inline-block">Valor do crédito:</p>
					<p class="display-inline-block">R$ <span id="showValue"></span></p>
				</div>
				<div>
					<p class="display-inline-block">Data:</p>
					<p class="display-inline-block"><?php echo strftime('%d/%b/%y - %H:%M');?></p>
				</div>
				<div>
					<p class="display-inline-block">Saldo após crédito:</p>
					<p class="display-inline-block">R$ 1500,00</p>
				</div>
				<button onclick="closePopUp()" class="my-btn my-btn-danger mb-3">Cancelar</button>				
				<button class="my-btn my-btn-success mb-3">Creditar</button>				
				
			</div>
	</fieldset>
	
</div>