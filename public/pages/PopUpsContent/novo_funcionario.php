<?php date_default_timezone_set('America/Sao_Paulo'); setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');?>

<div class="col-md-11 marginAuto mt-3 mb-4">
	<fieldset onloadeddata="fill()">
		<legend>Novo Funcionario</legend>			
			<div class="col-md-11 marginAuto divLancamento marginAuto">
				<div>
					<p class="display-inline-block">Nome:</p>
					<b><p class="display-inline-block" id="nome"><?php echo $_REQUEST['nome']?></p></b>
				</div>
				<div>
					<p class="display-inline-block">CPF:</p>
					<b><p class="display-inline-block" id="cpf"><?php echo $_REQUEST['cpf']?></p></b>
				</div>
				<div>
					<p class="display-inline-block">Tipo acesso:</p>
					<b><p class="display-inline-block" id="tipo_acesso"><?php echo $_REQUEST['tipo_acesso']?></p></b>
				</div>
				<div>
					<p class="display-inline-block">E-mail:</p>
					<b><p class="display-inline-block" id="E-mail"><?php echo $_REQUEST['email']?></p></b>
				</div>
				<button onclick="closePopUp()" class="my-btn my-btn-danger mb-3">Cancelar</button>				
				<button class="my-btn my-btn-success mb-3">Debitar</button>				
				
			</div>
	</fieldset>
</div>

</div>