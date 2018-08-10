<?php 
	// Classes para retornar as instancias utilizadas
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/Connection.php");
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Funcionarios.php");
?>

<!-- Cria tabala para ser inserida na div com classes "tabela-ativos" ou "tabela-inativos" na pagina de configuração -->
<!-- Pagina localizada na no arquivo "public/pages/configuração.php" -->

<table class="table table-sm table-responsive-xl">		
  		<?php 

  			// Cria uma instancia da classe que retornara os dados  		
			// Esta classe esta localizada na pasta "public/pages/PhpClasses/ConfigClass/Funcionarios.php"

			$users = new Funcionario();
			
			// O primeiro parametro e o segundo parametro serão utilizados no query para ordenar a tabela by coluna e ordem passados no parametro da função "orderParameter()"
			// Retorna os daos da busca no banco de dados dos funcionarios ativos ou inativos no sistema dependendo do valor retornado na variavel $_REQUEST['permission'] 

			$data = $users->buscaFuncionarios($_REQUEST['column'], $_REQUEST['order'], $_REQUEST['permission']);					
			
			// Define o texto e a cor que o botão deverá apresentar pelo valor da variavel $_REQUEST['table']
			
			if($_REQUEST['table'] == 'ativos')
				{								
					$btnVariable = "my-btn my-btn-primary";
					$btnText = "Desativar";					
				}else{
					$btnVariable = "my-btn my-btn-success";
					$btnText = "Ativar";					
				}

				// Para a ordem seja apresentada em ordem ascendente

				$_REQUEST['order'] = 'asc';
				?>
				<thead>
					<!-- Header dinamico para a tabela ativos ou inativos -->
					<!-- Preenche os parametros da função "orderParameter()" da tabela que será retornada -->
			    	<tr class="table-head">
			       		<th id="id_func-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				       		'<?php echo $_REQUEST['table']?>',
				       		'id_func',
				       		'<?php echo $_REQUEST['order']?>',
				     		'<?php echo $_REQUEST['permission']?>'
				       		
			       		)">#</th>
			     		<th id="nome_func-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				     		'<?php echo $_REQUEST['table']?>',
				     		'nome_func',
				     		'<?php echo $_REQUEST['order']?>',
				     		'<?php echo $_REQUEST['permission']?>'
				     		
			     		)">Nome</th>
			     		<th id="cpf-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				     		'<?php echo $_REQUEST['table']?>',
				     		'cpf',
				     		'<?php echo $_REQUEST['order']?>',
				     		'<?php echo $_REQUEST['permission']?>'
				     		
			     		)">CPF</th>
			      		<th id="tipo_acesso-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				      		'<?php echo $_REQUEST['table']?>',
				      		'tipo_acesso',
				      		'<?php echo $_REQUEST['order']?>',
				     		'<?php echo $_REQUEST['permission']?>'
				      		
			      		)">Tipo de Acesso</th>
			      		<th id="email-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				      		'<?php echo $_REQUEST['table']?>',
				      		'email',
				      		'<?php echo $_REQUEST['order']?>',
				     		'<?php echo $_REQUEST['permission']?>'
				      		
			      		)">E-Mail</th>
			      		<th ></th>
			    	</tr>
			  	</thead>
			  	<tbody class="table-body">
				<?php
			
			// Loop para imprimir as linhas da tabeça com os dados dos funcionarios

			while($user = mysqli_fetch_array($data)){
		?>
    	<tr>
			<!-- O segundo parametro da função "showPopUpConfig()" define quem deve ser ativado ou desativado dependendo do ultimo parametro-->
    		<!-- O ultimo parametro da função, "$_REQUEST['permission']", definira a ação do botão -->

      		<th scope="row"><?php echo $user['id_func']?></th>
      		<td><?php echo $user['nome_func']?></td>
      		<td><?php echo $user['cpf']?></td>
      		<td><?php echo $user['tipo_acesso']?></td>
      		<td><?php echo $user['email']?></td>
      		<td class="text-center"><button class="<?php echo $btnVariable; ?>" onclick="showPopUpConfig('permission',
      			'<?php echo $user['id_func']?>',
      			'<?php echo $user['nome_func']?>',
      			'<?php echo $user['cpf']?>',
      			'<?php echo $user['tipo_acesso']?>',
      			'<?php echo $user['email']?>',
      			'<?php echo $_REQUEST['permission']?>')"><?php echo $btnText; ?></button></td>
    	</tr>
    	<?php }?>
  	</tbody>
</table>