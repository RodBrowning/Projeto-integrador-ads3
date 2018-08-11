
function ajaxRequestIndex(Page){
	var xmlHttp = new XMLHttpRequest();

	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			let main = document.getElementById('main');
			main.innerHTML = xmlHttp.responseText;
		}
	}
	switch(Page){
		case 'lancamento' : 
			///pagina de lançamentos
			xmlHttp.open('get',`./pages/lancamentos.php?page=${Page}`,true);			
			break;
		case 'caixa': 
			///pagina de caixa
			xmlHttp.open('get',`./pages/caixa.php?page=${Page}`,true);			
			break;
		case 'historico': 
			///pagina de historico
			xmlHttp.open('get',`./pages/historico.php?page=${Page}`,true);		
			break;
		case 'configuracao':
			// pagina de configuração
			xmlHttp.open('get',`./pages/configuracao/configuracao.php?page=${Page}`,true);			
			break;
	}
	xmlHttp.send();
}