
function Crud(operacao,...args){

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = ()=>
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					let popUpsDivBox = document.getElementById('pop-ups-div-box');		
								
					popUpsDivBox.innerHTML = xmlhttp.responseText;
				}
		}
		switch(operacao)
			{
				case 'salvar-funcionario':
						xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/operacoes/salvar_funcionario.php?nome_func=${args[0]}&cpf=${args[1]}&tipo_acesso=${args[2]}&email=${args[3]}&senha=${args[4]}&senhaConfirm=${args[5]}`,true);
					break;
				case 'permission-funcionario':
						xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/operacoes/permissao_funcionario.php?id_func=${args[0]}&nome_func=${args[1]}&permission=${args[2]}`,true);
					break;	
				case 'update-valores-horas':
						xmlhttp.open('post',`./pages/PopUpsContent/config/valores/operacoes/update_valores_horas.php?primeiraHora=${args[0]}&demaisHoras=${args[1]}`,true);
					break;
				case 'update-valores-diario':
						xmlhttp.open('post',`./pages/PopUpsContent/config/valores/operacoes/update_valores_diario.php?valorDiario=${args[0]}`,true);
					break;	
				case 'update-valores-mensal':
						xmlhttp.open('post',`./pages/PopUpsContent/config/valores/operacoes/update_valores_mensal.php?valorMensal=${args[0]}`,true);
					break;		

					
				
			}
	
	xmlhttp.send();
}
