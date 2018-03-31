function barradoMenu(id) {
	// Retira a classe active do link corrente.
	var removeClass = document.getElementsByClassName('menu-link');
	for(let i=0; i<removeClass.length; i++){
		console.log(removeClass[i].classList.remove('active'));
	}	
	// Adiciona a classe active no link clicado.
    var element = document.getElementById(id);
    element.classList.toggle("active");
    
}


// Troca as imagens dos icones para laranja quando o mouse esta por cima
function hideImage(id){
	let imagem = document.getElementById(id);
	imagem.firstChild.style.display = 'none';
	imagem.lastChild.style.display = 'unset';
}

function showImage(id){
	let imagem = document.getElementById(id);
	imagem.lastChild.style.display = 'none';
	imagem.firstChild.style.display = 'unset';
}