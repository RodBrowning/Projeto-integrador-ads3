function validarDadosEntradaVeiculo(){

	var placa = document.getElementById('placa').value;
	var nomeMotorista = document.getElementById('nomeMotorista').value;

	regPlaca = /^[a-zA-z]{3}[-]?[0-9]{4}$/;
	regMotorista = /^([a-zA-Z ]{2,30})$/

	if(!placa.match(regPlaca)){
		alert("Placa invalida");

	}else if(!nomeMotorista.match(regMotorista)){
		alert("Nome invalido");
	}else{
		placa = placa.replace("-","");
		alert(placa);
		showPopUpVeiculo("confirmar-dados-entrada", placa, nomeMotorista);
		
	}


}