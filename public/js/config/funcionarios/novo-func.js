/// Change name to revomePontuation()
function validarCPF(CPF)
	{
		var cpfNoPontiation = CPF.substr(0,3)+CPF.substr(4,3)+CPF.substr(8,3)+CPF.substr(12,2);
		console.log(cpfNoPontiation);
	}

function cpfFormatValidation(input)
{
  
      // Verifica se o tamanho e adequado
      if(input.value.length == 14)
      {
        var re = /\d{3}\.\d{3}\.\d{3}[-]\d{2}/;
        // Verifica se esta dentro da regra do REGEX
        if (!input.value.match(re))
        {
            input.value = "";
            alert("Only number are valid. Type again");
        }else
          {
            // Placeholder para futura formula AJAX
            validarCPF(input.value);
          }
      // Exibe uma msg de erro caso o tamanho seja menor que o especificado
      }else if(input.value.length < 14)
        {
          alert("Formato invalido. Verifique se as pontuações estão no formato XXX.XXX.XXX-XX. Tente novamente.");
          input.value = "";
        }else // Exibe mensagem de erro generica para qualquer outra situação
          {
            alert("Unknown error. Type again");
            input.value = "";
          }

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

