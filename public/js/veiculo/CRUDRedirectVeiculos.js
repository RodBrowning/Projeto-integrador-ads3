function CRUDVeiculo(tipo_operacao,...args){
			// Vai para o topo em dispositivos pequenos
	if(window.innerWidth <= 783){
		window.scrollTo(0, 0);	
	}
	

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
				case 'entrada-hora':
						xmlhttp.open('post', `./pages/PopUpsContent/veiculo/CRUDVeiculo/entradaVeiculoHora.php?plano=${args[0]}`,true);	
					break;
				case 'entrada-plano':
						xmlhttp.open('post', `./pages/PopUpsContent/veiculo/CRUDVeiculo/entradaVeiculoPlano.php?plano=${args[0]}`,true);	
					break;
				default :
						xmlhttp.open();
					break;

			}
	
	xmlhttp.send();
}
