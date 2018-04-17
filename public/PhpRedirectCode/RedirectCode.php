<?php 

	switch($_REQUEST['page']){
		case 'lancamento' : 
			///pagina de lançamentos
			$lancamento = '../pages/lancamentos.php';
			header("location:$lancamento");	
			break;
		case 'caixa': 
			///pagina de caixa
			$caixa = '../pages/caixa.php';
			header("location:$caixa");	
			break;
		case 'historico': 
			///pagina de historico
			$historico = '../pages/historico.php';
			header("location:$historico");	
			break;
		case 'configuracao':
			// pagina de configuração
			$configuracao = '../pages/configuracao.php';
			header("location:$configuracao");	
			break;
	}

?>
	
