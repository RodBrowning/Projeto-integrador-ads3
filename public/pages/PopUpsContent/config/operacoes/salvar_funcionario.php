
<?php 
require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Funcionarios.php");


	/// Validação dos dados

	$Funcionario = new Funcionario();
	$Funcionario->inserirNovoFuncionario($_REQUEST['nome_func'], $_REQUEST['cpf'], $_REQUEST['tipo_acesso'], $_REQUEST['email'], $_REQUEST['senha']);
?> 
	<link rel="stylesheet" type="text/css" href="css/pages-styles/pop-ups/pop-ups.css">
	
	<div class="black_background" onclick="ajaxRequestIndex('configuracao'),closePopUp()">
	</div>	
	<div id="pop-up-box" class="pop-up-box">
		<div class="successMessage">
			<h4>Novo funcionario <b><?php echo $_REQUEST['nome_func'] ?></b> salvo com sucesso!</h4>
			<button class="my-btn my-btn-success marginAuto" onclick="ajaxRequestIndex('configuracao'),closePopUp()">OK</button>
		</div>
	</div>
	
	

