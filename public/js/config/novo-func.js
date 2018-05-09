function validarNovoFuncionario(){
	
	var nome = document.getElementById('nome-func').value;
	var cpf	= document.getElementById('CPF').value;
	var acesso = document.getElementById('select').value;
	var email = document.getElementById('email').value;
	var senha = document.getElementById('senha').value;
	var senhaConfirm = document.getElementById('senhaConfirm').value;

	if(senha == '' || senhaConfirm == '')
		{
			alert('O campo senha precisa ser preenchido!');
		}else if(senha != senhaConfirm)
			{
				alert('As senhas não são iguais!');
			}else{
				showPopUp('confirm-func', nome, cpf, acesso, email,senha,senhaConfirm);			
			}
	
}

