function validarCPF(CPF)
	{
		var cpfNoPontiation = CPF.substr(0,3)+CPF.substr(4,3)+CPF.substr(8,3)+CPF.substr(12,2);
		console.log(cpfNoPontiation);
	}

function validarNovoFuncionario()
	{
		
		var nome = document.getElementById('nome-func').value;
		var cpf	= document.getElementById('CPF').value;
		var acesso = document.getElementById('select').value;
		var email = document.getElementById('email').value;
		var senha = document.getElementById('senha').value;
		var senhaConfirm = document.getElementById('senhaConfirm').value;
		var validado = false;
		// validação dos dados;

		if(senha == '' || senhaConfirm == '')
			{
				alert('O campo senha precisa ser preenchido!');
			}
			else if(senha != senhaConfirm)
				{
					alert('As senhas não são iguais!');
				}
				else{
					validado = true;
				}
		
		if(validado)
			{
				showPopUp('confirm-func', nome, cpf, acesso, email,senha,senhaConfirm);		
			}
		
	}

