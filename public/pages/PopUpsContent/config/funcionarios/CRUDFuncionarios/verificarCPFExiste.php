<?php
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/Connection.php");
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Funcionarios.php");

	$cpf = $_REQUEST["CPF"];

	$Funcionario = new Funcionario();
	if($Funcionario->CPFExiste($cpf) == true){ echo true; }else{ echo false; }?>