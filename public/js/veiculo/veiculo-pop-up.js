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
		/// Funciona como o sistema utilizado em Factoy Method Pattern
		switch(tipo_operacao)
			{
				case 'entrada':
						xmlhttp.open('post', `./pages/PopUpsContent/veiculo/FormularioEntrada/formularioEntradaVeiculo.php`,true);
					break;
				case 'confirmar-dados-entrada':
						xmlhttp.open('get', `./pages/PopUpsContent/veiculo/FormularioEntrada/exibirDadosParaConfirmacao.php`,true);
					break;
				case 'credito':
						xmlhttp.open('get', `./pages/PopUpsContent/caixa/novo_credito.php`,true);													
					break;
				default :
						xmlhttp.open();
					break;
			}
	
	xmlhttp.send();
}