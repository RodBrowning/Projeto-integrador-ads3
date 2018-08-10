// Função responsavel por ordenar os valores das tabelas com click na coluna
function orderParameter(...arg)
{	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = ()=>
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{	
					// Variavel forma o nome da tabela para tabela-ativa ou tabela-inativa
					let tbl = "tabela-" + arg[0];
					// Seleciona o div com o nome da tabela
					let divTable = document.getElementById(`${tbl}`);
					// Insere a nova tabela com a ordem desejada no div selecionado
					divTable.innerHTML = xmlhttp.responseText;

					//Define up or down arrow
					arrowUpOrDown(arg[0],arg[1],arg[2],arg[3]);
				}
		}

	switch(arg[0])
		{
			// 
			case (arg[0] == 'inativos' ? 'inativos' : 'ativos') :
					// Arquivo php que retornará a nova tabela 
					xmlhttp.open('post', `./pages/PopUpsContent/config/funcionarios/CRUDFuncionarios/ordenar_tabelas_funcionarios.php?table=${arg[0]}&column=${arg[1]}&order=${arg[2]}&permission=${arg[3]}`,true);	
				break;
		}	
	xmlhttp.send();
}

// Define a direção da seta ao clicar na coluna
// Semelhante ao sistema de ordenação dos sistemas operacionas

function arrowUpOrDown(...arg){
	let columnName = arg[1]+"-"+arg[0];
	let colunaAtiva = document.getElementById(`${columnName}`);
	
	switch(arg[0])
		{
			case (arg[0] == 'inativos' ? 'inativos' : 'ativos'):
					colunaAtiva.attributes[1].nodeValue = `orderParameter("${arg[0]}","${arg[1]}","${arg[2] == 'asc' ? 'desc' : 'asc' }","${arg[3]}")`;				
				break;
		}
	
		if(arg[2] == "asc")
			{
				var tableHeadArrowIcon = `${colunaAtiva.innerHTML} 
				<svg class="arrow" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 512.171 512.171" style="enable-background:new 0 0 512.171 512.171;" xml:space="preserve">
				<path d="M479.046,283.925c-1.664-3.989-5.547-6.592-9.856-6.592H352.305V10.667C352.305,4.779,347.526,0,341.638,0H170.971
				c-5.888,0-10.667,4.779-10.667,10.667v266.667H42.971c-4.309,0-8.192,2.603-9.856,6.571c-1.643,3.989-0.747,8.576,2.304,11.627
				l212.8,213.504c2.005,2.005,4.715,3.136,7.552,3.136s5.547-1.131,7.552-3.115l213.419-213.504
				C479.793,292.501,480.71,287.915,479.046,283.925z"/>
				`;
			}else
				{
					var tableHeadArrowIcon = `${colunaAtiva.innerHTML} 
					<svg class="arrow" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 				viewBox="0 0 512.171 512.171" style="enable-background:new 0 0 512.171 512.171;" xml:space="preserve">
					<path d="M476.723,216.64L263.305,3.115C261.299,1.109,258.59,0,255.753,0c-2.837,0-5.547,1.131-7.552,3.136L35.422,216.64
					c-3.051,3.051-3.947,7.637-2.304,11.627c1.664,3.989,5.547,6.571,9.856,6.571h117.333v266.667c0,5.888,4.779,10.667,10.667,10.667
					h170.667c5.888,0,10.667-4.779,10.667-10.667V234.837h116.885c4.309,0,8.192-2.603,9.856-6.592
					C480.713,224.256,479.774,219.691,476.723,216.64z"/>
					`;
				}
	colunaAtiva.innerHTML = tableHeadArrowIcon;
}