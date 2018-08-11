<?php
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/Connection.php");
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Funcionarios.php");

	$email = $_REQUEST["email"];

	// Cria instancia e chama função para verificar existencia do email do banco
	$Funcionario = new Funcionario();
		if($Funcionario->emailExiste($email) == true){ 
			echo true; 
		}else{ 
			echo false; 
		}
?>