<?php 
	$operacao = "Ativar";

	if($_REQUEST['permission']== 0)
		{
			$operacao = "Desativar";
		}
?>
<!-- Caixa de confirmação de ativação ou desativação de funcionario -->
<div>
	<fieldset >
		<legend><?php echo $operacao?> Funcionario</legend>			
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
					<b><p class="display-inline-block" id="E-mail"><?php echo $_REQUEST['permission']?></p></b>
				</div>
				<button onclick="closePopUp()" class="my-btn my-btn-danger mb-3">Cancelar</button>	
				<!-- Chama função JavaScript que redirecionará para a pagina php fazer a alteração no banco -->			
				<button onclick="CrudConfig('permission-funcionario',
		      			'<?php echo $_REQUEST['id_func']?>',
		      			'<?php echo $_REQUEST['nome_func']?>',		      			
		      			'<?php echo $_REQUEST['permission']?>',)" class="my-btn my-btn-success mb-3"><?php echo $operacao?></button>				
				
			</div>
	</fieldset>
</div>