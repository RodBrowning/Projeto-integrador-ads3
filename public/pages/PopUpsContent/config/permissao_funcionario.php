<?php 
	$popPage = "Ativar";

	if($_REQUEST['permissao']== 0)
		{
			$popPage = "Desativar";
		}
?>
<div class="col-md-11 marginAuto mt-3 mb-4">
	<fieldset >
		<legend><?php echo $popPage?> Funcionario</legend>			
			<div class="col-md-11 marginAuto divLancamento marginAuto">
				<div>
					<p class="display-inline-block">ID:</p>
					<b><p class="display-inline-block" id="nome"><?php echo $_REQUEST['id_func']?></p></b>
					<p class="display-inline-block">Nome:</p>
					<b><p class="display-inline-block" id="nome"><?php echo $_REQUEST['nome_func']?></p></b>
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
				<div>
					<p class="display-inline-block">Permission:</p>
					<b><p class="display-inline-block" id="E-mail"><?php echo $_REQUEST['permissao']?></p></b>
				</div>
				<button onclick="closePopUp()" class="my-btn my-btn-danger mb-3">Cancelar</button>				
				<button onclick="Crud('permissao-funcionario',
		      			'<?php echo $_REQUEST['id_func']?>',
		      			'<?php echo $_REQUEST['nome_func']?>',		      			
		      			'<?php echo $_REQUEST['permissao']?>',)" class="my-btn my-btn-success mb-3"><?php echo $popPage?></button>				
				
			</div>
	</fieldset>
</div>