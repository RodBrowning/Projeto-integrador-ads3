
<?php 
	
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Funcionarios.php");
	
	$popPage = "ativado";

	if($_REQUEST['permissao']== 0)
		{
			$popPage = "desativado";
		}

	/// Validação dos dados

	$Funcionario = new Funcionario();
	$Funcionario->permissaoFuncionario($_REQUEST['id_func'],$_REQUEST['permissao']);
?> 
	<link rel="stylesheet" type="text/css" href="css/pages-styles/pop-ups/pop-ups.css">
	
	<div class="black_background" onclick="ajaxRequestIndex('configuracao'),closePopUp()">
	</div>	
	<div id="pop-up-box" class="pop-up-box">
		<div class="successMessage">
			<h4>Funcionario <b><?php echo $_REQUEST['nome_func'] ?></b> <?php echo $popPage ?> com sucesso!</h4>
			<button class="my-btn my-btn-success marginAuto" onclick="ajaxRequestIndex('configuracao'),closePopUp()">OK</button>
		</div>
	</div>
	