function showPopUp(tipo_operacao,...args){

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
						xmlhttp.open('get', `./pages/PopUpsContent/veiculo/FormularioEntrada/formularioEntradaVeiculo.php`,true);
					break;
				case 'debito':
						xmlhttp.open('get', `./pages/PopUpsContent/caixa/novo_debito.php`,true);
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

function closePopUp(){

	var popUpsDivBox = document.getElementById('pop-ups-div-box');

	popUpsDivBox.innerHTML = ``;	
}



function ngModelEntradaPlaca(id)	
	{
		var value = document.getElementById(id);
		var value2 = formatar('###-####',value);
		var showValue = document.getElementById('showPlaca');
		showValue.innerHTML = value2.toUpperCase();
	}

function ngModelEntradaNomeMotorista(id)	
	{
		var value = document.getElementById(id).value;
		var showValue = document.getElementById('showMotorista');
		showValue.innerHTML = upperCaseFirst(value);
	}

function ngModelCaixa(id)
	{
		var value = document.getElementById(id).value;
		var showValue = document.getElementById('showValue');
		showValue.innerHTML = value;
	}



