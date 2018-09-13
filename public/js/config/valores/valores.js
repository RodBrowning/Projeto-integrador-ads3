// Função direciona para a caixa de pop-up conforme o tipo de operação a se realizar
// Funciona como o sistema utilizado em Factoy Method Pattern
function validarValores(tipo_de_operacao){
	

	switch(tipo_de_operacao)
		{
			case 'update-valores-horas':
					var primeiraHora = document.getElementById('primeira-hora').value;
					var demaisHoras = document.getElementById('demais-horas').value;

					showPopUpConfig(tipo_de_operacao, primeiraHora, demaisHoras);	
						
				break;
			case 'update-valores-diario':		
					var valorDiario = document.getElementById('valor-diario').value;			
					
					showPopUpConfig(tipo_de_operacao,valorDiario);
					
				break;
			case 'update-valores-mensal':		
					var valorMensal = document.getElementById('valor-mensal').value;			
					
					showPopUpConfig(tipo_de_operacao,valorMensal);
					
				break;
		}
	
	
}

