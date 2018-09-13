// Redireciona para as paginas php responsveis pela resposta das operações na pagina de congigurações e manupulação do banco de dados 
// Funciona como o sistema utilizado em Factoy Method Pattern
function CrudConfig(tipo_operacao,...args){

	// Vai para o topo em dispositivos pequenos
	if(window.innerWidth <= 783){
		window.scrollTo(0, 0);	
	}
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = ()=>
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					let popUpsDivBox = document.getElementById('pop-ups-div-box');										
					
					popUpsDivBox.innerHTML = xmlhttp.responseText;
				}
		}
		switch(tipo_operacao)
			{
				case 'salvar-funcionario':
						xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/CRUDFuncionarios/salvar_funcionario.php?nome_func=${args[0]}&cpf=${args[1]}&tipo_acesso=${args[2]}&email=${args[3]}&senha=${args[4]}`,true);
					break;
				case 'permission-funcionario':
						xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/CRUDFuncionarios/alterar_permissao_funcionario.php?id_func=${args[0]}&nome_func=${args[1]}&permission=${args[2]}`,true);
					break;	
				case 'update-valores-horas':
						xmlhttp.open('post',`./pages/PopUpsContent/config/valores/CRUDValores/update_valores_horas.php?primeiraHora=${args[0]}&demaisHoras=${args[1]}`,true);
					break;
				case 'update-valores-diario':
						xmlhttp.open('post',`./pages/PopUpsContent/config/valores/CRUDValores/update_valores_diario.php?valorDiario=${args[0]}`,true);
					break;	
				case 'update-valores-mensal':
						xmlhttp.open('post',`./pages/PopUpsContent/config/valores/CRUDValores/update_valores_mensal.php?valorMensal=${args[0]}`,true);
					break;		

			}
	
	xmlhttp.send();
}
