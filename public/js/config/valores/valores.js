function validarValores(tipo_de_operacao){
	
	
	var validado = false;

	switch(tipo_de_operacao)
		{
			case 'update-valores-horas':
					var primeiraHora = document.getElementById('primeira-hora').value;
					var demaisHoras = document.getElementById('demais-horas').value;

					if(!validado)
						{
							showPopUp(tipo_de_operacao, primeiraHora, demaisHoras);	
						}
				break;
			case 'update-valores-diario':		
					var valorDiario = document.getElementById('valor-diario').value;			
					if(!validado)
						{
							showPopUp(tipo_de_operacao,valorDiario);
						}
				break;
			case 'update-valores-mensal':		
					var valorMensal = document.getElementById('valor-mensal').value;			
					if(!validado)
						{
							showPopUp(tipo_de_operacao,valorMensal);
						}
				break;
		}
	
	
}

