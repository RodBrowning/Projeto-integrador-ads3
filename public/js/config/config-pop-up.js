// Função responsavel por exibir pop-up para cada operação na pagina de configuração
// Funciona como o sistema utilizado em Factoy Method Pattern
function showPopUpConfig(tipo_operacao,...args){

	var popUpsDivBox = document.getElementById('pop-ups-div-box');
	// Caixa de pop-up padrão
	popUpsDivBox.innerHTML = `	<link rel="stylesheet" type="text/css" href="css/pages-styles/pop-ups/pop-ups.css">
								<div class="black_background" onclick="closePopUp()">
								</div>
								
								<div id="pop-up-box" class="pop-up-box">

								</div>
							`;

	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = ()=>
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					var result = document.getElementById("pop-up-box");
					// insere o conteudo do pop-up na caixa de pop-up padrão
					result.innerHTML = xmlhttp.responseText;
				}
		}

		/// Transfere a operação para o arquivo php correspondente
		switch(tipo_operacao)
			{				
				case 'permission':
						xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/permissao_funcionario.php?id_func=${args[0]}&nome_func=${args[1]}&cpf=${args[2]}&tipo_acesso=${args[3]}&email=${args[4]}&permission=${args[5]}`,true);													
					break;
				case 'update-valores-horas':
						xmlhttp.open('post', `./pages/PopUpsContent/config/valores/confirm_update_valores_horas.php?primeiraHora=${args[0]}&demaisHoras=${args[1]}`,true);													
					break;
				case 'update-valores-diario':
						xmlhttp.open('post', `./pages/PopUpsContent/config/valores/confirm_update_valores_diario.php?valorDiario=${args[0]}`,true);													
					break;
				case 'update-valores-mensal':
						xmlhttp.open('post', `./pages/PopUpsContent/config/valores/confirm_update_valores_mensal.php?valorMensal=${args[0]}`,true);													
					break;
				case 'Confirm-CPF':
						xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/FormularioCadastro/ConfirmarCPF.php?CPF=${args[0]}`,true);													
					break;		
				case 'Func-Form':
						xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/FormularioCadastro/FormularioNovoFuncionario.php?CPF=${args[0]}`,true);													
					break;	
				case 'confirm-func':
						xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/FormularioCadastro/novo_funcionario.php?nome_func=${args[0]}&cpf=${args[1]}&tipo_acesso=${args[2]}&email=${args[3]}&senha=${args[4]}&senhaConfirm=${args[5]}`,true);				
					break;
				default :
						xmlhttp.open();
					break;
			}
	
	xmlhttp.send();
}
