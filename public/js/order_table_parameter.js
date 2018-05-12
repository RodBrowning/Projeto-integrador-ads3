function orderParameter(table,column,permissao,order)
{	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = ()=>
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{	
					let tbl = "tabela-" + table;
					let divTable = document.getElementById(`${tbl}`);
					divTable.innerHTML = xmlhttp.responseText;

					//Define up or down arrow
					arrowUpOrDown(table,column,permissao,order);
				}
		}

	switch(table)
		{
			case (table == 'inativos' ? 'inativos' : 'ativos') :
					xmlhttp.open('post', `./pages/PopUpsContent/config/operacoes/ordenar_tabelas_funcionarios.php?table=${table}&column=${column}&permissao=${permissao}&order=${order}`,true);	
				break;
		}	
	xmlhttp.send();
}

function arrowUpOrDown(table,column,permissao,order){
	let columnName = column+"-"+table;
	let colunaAtiva = document.getElementById(`${columnName}`);
	console.log(colunaAtiva);
	colunaAtiva.attributes[1].nodeValue = `orderParameter("${table}","${column}","${permissao}","${order == 'asc' ? 'desc' : 'asc' }")`;
		if(order == "asc")
			{
				var tableHeadArrowIcon = `${colunaAtiva.innerHTML} \\/`;
			}else
				{
					var tableHeadArrowIcon = `${colunaAtiva.innerHTML} /\\`;
				}
	colunaAtiva.innerHTML = tableHeadArrowIcon;
}