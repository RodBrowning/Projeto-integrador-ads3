
function validarDadosEntradaVeiculo(){

	var placa = document.getElementById('placa').value;
	var nomeMotorista = document.getElementById('nomeMotorista').value;
	nomeMotorista = upperCaseFirst(nomeMotorista);

	// REGEX 
	regPlaca = /^[a-zA-z]{3}[-]?[0-9]{4}$/;
	regMotorista = /^([a-zA-Z ]{2,30})$/

	// validação dos dados
	if(!placa.match(regPlaca)){
		alert("Placa invalida");

	}else if(!nomeMotorista.match(regMotorista)){
		alert("Nome invalido");
	}else{
		placa = placa.replace("-","");
		veiculoAberto(placa,nomeMotorista);
		
	}


}

// Verifica se o veiculo ja se encontra no patio
function veiculoAberto(placa,nomeMotorista){
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = ()=>
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{						
						if(xmlhttp.responseText == true){
							alert("Veiculo ja esta no patio!");							
						}else{
							// Exibe tela para confirmação dos dados
							showPopUpVeiculo("confirmar-dados-entrada", placa, nomeMotorista);
							
						}
						
					}
			}
			
	xmlhttp.open('post', `./pages/PopUpsContent/veiculo/CRUDVeiculo/verificarVeiculoNoPatio.php?placa=${placa}`,true);													
		
	xmlhttp.send();
}

// Verifica se o cliente tem plano anual ou mensal

function verificarDiasPagos(placa, nomeMotorista){
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = ()=>
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{		
						// Se o veiculo tiver dias pagos é feito check-in
						// Se não para as opções de pagamento
						if(xmlhttp.responseText == true){
							
							CRUDVeiculo("novo-veiculo", placa, nomeMotorista);

						}else{
							showPopUpVeiculo("selecionar-plano", placa, nomeMotorista);
							
						}
						
					}
			}
			
	xmlhttp.open('post', `./pages/PopUpsContent/veiculo/CRUDVeiculo/verificarSePago.php?placa=${placa}`,true);													
		
	xmlhttp.send();	
}

/// Adiciona campos quantidade e total se não for plano
function visibilidadeCampoQuantidade(){

	var quantidade = document.getElementById('quantidade');
	var divQuantidade = document.getElementById('div-quantidade');
	// Separa o nome do plano do seu valor
	var plano = document.getElementById('plano').value.split("-");	
	var valorPlano = plano[0];
	var nomePlano = plano[1];

	var hiddenNomePlano = document.getElementById("tipoPlano");
	var hiddenValorPlano = document.getElementById("valorPlano");
	var hiddenQuantidade = document.getElementById("quantidadeFinal");
	var total = document.getElementById('total');

	// se plano não for aberto
	if(plano != 'aberto'){
		// Insere campo quantidade
		// Campo chama a funcão e passa a quantidade e valor do plano escolhido para calcular cobrança
		divQuantidade.innerHTML = `<label>Quantidade:</label>
									<input class="width-input-3" value= 1 type="number" name="quantidade" id="quantidade" min= 1 onchange="calcularValorCobranca(this.value, ${valorPlano})">`;

		// Insere campo que exibe total
		divQuantidade.style.display ='contents';
		total.innerHTML = `Total: R$<span id="valorTotal">${valorPlano}</span>`;
		total.style.display = 'block';

		// Atribui valores e nome do plano a um campo escondido para passa-los como variaveis
		// As variaveis serão utilizadas para efetuar a conbrança
		hiddenNomePlano.value = nomePlano;
		hiddenValorPlano.value = valorPlano;
		hiddenQuantidade.value = 1;		
	}else{
		// Remove campo quantidade
		divQuantidade.innerHTML = ``;
		divQuantidade.style.display ='none';
		// Remove campo que exibe total
		total.innerHTML = ``;
		total.style.display = 'none';

		// Define valores padrão
		// So o plano for aberto o cliente sera cobrado na saida
		// hiddenNomePlano será passado na função para determinar quando efetuar a cobrança
		hiddenNomePlano.value = "aberto";
		hiddenValorPlano.value = valorPlano;
		//quantidade de dias 0 para para clientes em aberto
		hiddenQuantidade.value = 0;
	}
}



// Calcula valor para cobrança
function calcularValorCobranca(quantidade, valor){
	
		var hiddenQuantidade = document.getElementById("quantidadeFinal");
		hiddenQuantidade.value = quantidade;
		
		var resultado = multiplicaValor(quantidade, valor);
		var valorTotal = document.getElementById('valorTotal');
		// Atualiza valor a pagar
		valorTotal.innerHTML = resultado;		
}

