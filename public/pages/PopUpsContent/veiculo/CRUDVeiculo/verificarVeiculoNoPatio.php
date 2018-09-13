<?php
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/Connection.php");
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/VeiculoClass/Veiculo.php");

	$placa = $_REQUEST["placa"];

	$entrada = new Veiculo();
	$estaNoPatio = $entrada->veiculoAberto($placa);
	if($estaNoPatio == true){
		echo true;
	}else{
		echo false;
	}

?>

