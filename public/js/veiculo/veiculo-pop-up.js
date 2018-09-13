// Função responsavel por exibir pop-up para cada operação na pagina de lançamento

function showPopUpVeiculo(tipo_operacao,...args){

	var popUpsDivBox = document.getElementById('pop-ups-div-box');

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
					
					result.innerHTML = xmlhttp.responseText;

				}
		}

		/// Transfere a operação para o arquivo php correspondente
		switch(tipo_operacao)
			{
				case 'entrada':
						xmlhttp.open('post', `./pages/PopUpsContent/veiculo/FormularioEntrada/formularioEntradaVeiculo.php`,true);
					break;
				case 'confirmar-dados-entrada':
						xmlhttp.open('post', `./pages/PopUpsContent/veiculo/FormularioEntrada/exibirDadosParaConfirmacao.php?placa=${args[0]}&nomeMotorista=${args[1]}`,true);
					break;
				case 'selecionar-plano':
						xmlhttp.open('post', `./pages/PopUpsContent/veiculo/FormularioEntrada/formularioCobrancaEntrada.php?placa=${args[0]}&nomeMotorista=${args[1]}`,true);
					break;
				case 'confirm-plano':
						xmlhttp.open('post', `./pages/PopUpsContent/veiculo/FormularioEntrada/confirmarPlano.php?placa=${args[0]}&nomeMotorista=${args[1]}&valorPlano=${args[2]}&quantidade=${args[3]}&plano=${args[4]}`,true);
					break;										
				default :
						xmlhttp.open();
					break;
			}
	
	xmlhttp.send();
}