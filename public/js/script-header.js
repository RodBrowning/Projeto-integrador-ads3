
function unSetMenuColor(){
	// Retira a classe active do link corrente no nav bar.
	var removeClass = document.getElementsByClassName('menu-link');
	for(let i=0; i<removeClass.length; i++){
		removeClass[i].classList.remove('active');
	}	
	// Retira laranja do botão de configuração.
	var element = document.getElementsByClassName('button-top-menu');
	for(let i=0; i<element.length; i++){
		element[i].classList.remove("orange-border");
	    var elementChild = element[i].firstChild.classList;    
	    elementChild.remove('pathSvg-orange');
	    elementChild.add('pathSvg');
	}
    
}

function barraLaranjadoMenu(id) {
	unSetMenuColor();
	// Adiciona a classe active no link clicado.
    var element = document.getElementById(id);
    element.classList.toggle("active");
    
}

function laranjaMenuSuperiorDireito(num){
	unSetMenuColor();
	// Deixa o botão de configuração laranja
	var element = document.getElementsByClassName('button-top-menu');
    element[num].classList.add("orange-border");
    var elementChild = element[num].firstChild.classList;
    elementChild.remove('pathSvg');
    elementChild.add('pathSvg-orange');
}


