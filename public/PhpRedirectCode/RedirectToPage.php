<?php 

	switch($_REQUEST['page']){
		case 'lancamento' : 
			///pagina de lançamentos
			$lancamento = '../pages/lancamentos.php?page='. $_REQUEST['page'].'';
			header("location:$lancamento");	
			break;
		case 'caixa': 
			///pagina de caixa
			$caixa = '../pages/caixa.php?page='. $_REQUEST['page'].'';
			header("location:$caixa");	
			break;
		case 'historico': 
			///pagina de historico
			$historico = '../pages/historico.php?page='. $_REQUEST['page'].'';
			header("location:$historico");	
			break;
		case 'configuracao':
			// pagina de configuração
			$configuracao = '../pages/configuracao.php?page='. $_REQUEST['page'].'';
			header("location:$configuracao");	
			break;
	}

?>
	
