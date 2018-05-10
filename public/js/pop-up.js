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
		switch(tipo_operacao)
			{
				case 'entrada':
						xmlhttp.open('get', `./pages/PopUpsContent/lancamento/nova_entrada.php`,true);
					break;
				case 'debito':
						xmlhttp.open('get', `./pages/PopUpsContent/caixa/novo_debito.php`,true);
					break;
				case 'credito':
						xmlhttp.open('get', `./pages/PopUpsContent/caixa/novo_credito.php`,true);													
					break;
				case 'confirm-func':
						xmlhttp.open('post', `./pages/PopUpsContent/config/novo_funcionario.php?nome_func=${args[0]}&cpf=${args[1]}&tipo_acesso=${args[2]}&email=${args[3]}&senha=${args[4]}&senhaConfirm=${args[5]}`,true);				
					break;
				case 'ativar':
						xmlhttp.open('get', `./pages/PopUpsContent/config/ativar_funcionario.php?id_func=${args[0]}&nome_func=${args[1]}&cpf=${args[2]}&tipo_acesso=${args[3]}&email=${args[4]}`,true);													
					break;
				case 'desativar':
						xmlhttp.open('get', `./pages/PopUpsContent/config/desativar_funcionario.php?id_func=${args[0]}&nome_func=${args[1]}&cpf=${args[2]}&tipo_acesso=${args[3]}&email=${args[4]}`,true);													
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



