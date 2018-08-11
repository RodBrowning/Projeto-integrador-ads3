<?php date_default_timezone_set('America/Sao_Paulo'); setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	// Importa função "mask()"
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/UtilFunctionsPhp.php"); 
?>

<div>
	<fieldset>
		<legend>Novo Funcionario</legend>			
			<div class="col-md-11 marginAuto divLancamento marginAuto">
				<div>
					<p class="display-inline-block">Nome:</p>
					<b><p class="display-inline-block" id="nome"><?php echo $_REQUEST['nome_func']?></p></b>
				</div>
				<div>
					<p class="display-inline-block">CPF:</p>
					<b><p class="display-inline-block" id="cpf"><?php echo mask($_REQUEST['cpf'],'###.###.###-##')?></p></b>
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
				<button onclick="CrudConfig('salvar-funcionario',<?php echo "'".$_REQUEST['nome_func']."'"?>,<?php echo "'".$_REQUEST['cpf']."'"?>,<?php echo "'".$_REQUEST['tipo_acesso']."'"?>,<?php echo "'".$_REQUEST['email']."'"?>,<?php echo "'".$_REQUEST['senha']."'"?>,<?php echo "'".$_REQUEST['senhaConfirm']."'"?>)" class="my-btn my-btn-success mb-3">Salvar</button>				
				
			</div>
	</fieldset>
</div>

