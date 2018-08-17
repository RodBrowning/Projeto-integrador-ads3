
/// Função para retirar pontuações e verificar validade do CPF matematicamente
function formatCPF(CPF){
	/// REGEX para computador que formata o CPF automaticamente
	var re = /\d{3}\.\d{3}\.\d{3}[-/]\d{2}/;
	/// REGEX para computador que não formata o CPF automaticamente
	var reCEL = /\d{11}/;

	/// Se não estiverem dentro de umas das expressões retorna false
	if(CPF.value.match(re)){

		var cpf = CPF.value.substr(0,3)+CPF.value.substr(4,3)+CPF.value.substr(8,3)+CPF.value.substr(12,2);

	}else if(CPF.value.match(reCEL)){

		var cpf = CPF.value;

	}else{

		alert("CPF invalido");
		return false;
	}

	// Se estiver dentro de um numero valido matematicamente verifica se já existe no banco
	if(isCPF(cpf) == true)
		{
			CPFExiste(cpf);
		}else{
			alert('CPF invalido');
		}	
}

/// Testa o CPF matematicamente
function isCPF(strCPF){
	    var Soma;
	    var Resto;
	    Soma = 0;
	 	if (strCPF == "00000000000") return false;
	     
	  	for (i=1; i<=9; i++) 
	  	Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
	  	Resto = (Soma * 10) % 11;
	   
	    if ((Resto == 10) || (Resto == 11))  Resto = 0;
	    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
	   
	  	Soma = 0;
	    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
	    Resto = (Soma * 10) % 11;
	   
	    if ((Resto == 10) || (Resto == 11))  Resto = 0;
	    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
	    return true;
	}


/// Verifica existencia do CPF no banco de dados
function CPFExiste(cpf){
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = ()=>
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{						
						if(xmlhttp.responseText == true){
							alert("Erro: CPF ja existe na base de dados!");							
						}else{

							showPopUpConfig("Confirm-CPF",cpf);
							
						}
						
					}
			}
			
	xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/CRUDFuncionarios/verificarCPFExiste.php?CPF=${cpf}`,true);													
		
	xmlhttp.send();
}

// Função de validação de dados
function validarNovoFuncionario()
	{
		// dados inseridos

		var nome = document.getElementById('nome-func').value;
		var email = document.getElementById('email').value;
		var cpf	= document.getElementById('CPF').getAttribute('value');
		var acesso = document.getElementById('select').value;		
		var senha = document.getElementById('senha').value;
		var senhaConfirm = document.getElementById('senhaConfirm').value;
		
		var validado;

		// Expressões REGEX para validar dados
		var reNome = /^([a-zA-Z ]+)$/;
		var reEmail = /^[a-z0-9._]+@[a-z0-9]+(\.[a-z]+)(\.[a-z]+)?$/;
		var reSenha = /^[a-zA-Z0-9_!%*$&]+$/;


		// validação dos dados com comparação REGEX;

		if(!nome.match(reNome)){
			alert('Nome invalido');
		}else if(!email.match(reEmail)){
			alert('Email invalido');
		}else if(!senha.match(reSenha)){
			alert('Senha invalida. Não utilize caracteres especiais.');
		}else if(senha != senhaConfirm){
			alert('Senha invalida. As senhas devem ser iquais');
		}else{
			// Verificação de email existente
			emailExiste(email, nome, cpf, acesso, email,senha,senhaConfirm);
		}

		
		
		// Retorna pop-up de confirmação
		
		
		
		
	}

// Verifica existencia do email no banco de dados e faz redirecionamento
function emailExiste(email, nome, cpf, acesso, email,senha,senhaConfirm){
	var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = ()=>
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
					{	
						if(xmlhttp.responseText == true){
							alert("Erro: E-mail ja existe na base de dados!");	
						}else{
							// Direciona para pop-up de confirmação de todos os dados pelo usuario
							showPopUpConfig('confirm-func', nome, cpf, acesso, email,senha,senhaConfirm);		
						}
						
					}
			}
			
	xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/CRUDFuncionarios/verificarEmailExiste.php?email="${email}"`,true);													
		
	xmlhttp.send();
}