
<?php
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/Connection.php"); 
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Valores.php");


	/// Validação dos dados

	$valores = new Valores();
	$valores->updateValoresHoras($_REQUEST['primeiraHora'], $_REQUEST['demaisHoras']);
?> 
	<link rel="stylesheet" type="text/css" href="css/pages-styles/pop-ups/pop-ups.css">
	
	<div class="black_background" onclick="ajaxRequestIndex('configuracao'),closePopUp()">
	</div>	
	<div id="pop-up-box" class="pop-up-box">
		<div class="successMessage">
			<h4>Os Valores da primeira hora <b>R$<?php echo $_REQUEST['primeiraHora'] ?></b> e das demais horas <b>R$<?php echo $_REQUEST['demaisHoras'] ?></b> foram salvos com sucesso!</h4>
			<button class="my-btn my-btn-success marginAuto" onclick="ajaxRequestIndex('configuracao'),closePopUp()">OK</button>
		</div>
	</div>
	
	
