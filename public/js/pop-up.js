function showPopUp(tipo_operacao,...args){

	var popUpsDivBox = document.getElementById('pop-ups-div-box');

	popUpsDivBox.innerHTML = `	
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
						xmlhttp.open('get', `./pages/PopUpsContent/nova_entrada.php`,true);
					break;
				case 'debito':
						xmlhttp.open('get', `./pages/PopUpsContent/novo_debito.php`,true);
					break;
				case 'credito':
						xmlhttp.open('get', `./pages/PopUpsContent/novo_credito.php`,true);													
					break;
				case 'confirm-func':
						xmlhttp.open('get', `./pages/PopUpsContent/novo_funcionario.php?nome=${args[0]}&cpf=${args[1]}&tipo_acesso=${args[2]}&email=${args[3]}`,true);				
					break;
				default :
						xmlhttp.open('get', `./PhpRedirectCode/RedirectToPopUps.php?operacao=${tipo_operacao}`,true);
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



