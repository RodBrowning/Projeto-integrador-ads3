
<?php 
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/Connection.php");
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
			<h4 class="text-center">Novo funcionario<br/><b><?php echo $_REQUEST['nome_func'] ?><br/></b>salvo com sucesso!</h4>
			<div class="text-center">
				<button class="my-btn my-btn-success marginAuto" onclick="ajaxRequestIndex('configuracao'),closePopUp()">OK</button>
			</div>
		</div>
	</div>
	
	

