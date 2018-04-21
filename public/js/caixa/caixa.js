
// O codigo abaixo faz com que a cor mude para verde ou vermelho dependendo do saldo
let main = document.getElementById('main');
main.addEventListener ('DOMNodeInserted', colorSaldo, false);
function colorSaldo (){
		try{
			var tfootColor = document.getElementsByClassName('saldo');
			var caixa = document.getElementById('saldo');
			var saldo = parseFloat(caixa.innerHTML.replace(',', '.'));	
			if(saldo >0){
				for(var i=0; i < tfootColor.length; i++){
					tfootColor[i].style.backgroundColor = '#35ef3b';
				}
			}else if (saldo <0){
				for(var i=0; i < tfootColor.length; i++){
					tfootColor[i].style.backgroundColor = '#ef3535';
				}	
			}
		}catch(e){
		}
	}

