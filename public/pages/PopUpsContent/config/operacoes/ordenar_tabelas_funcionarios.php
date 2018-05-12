<?php 
require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Funcionarios.php");
?>

<table class="table table-sm table-responsive-xl">		
  		<?php 
			$users = new Funcionario();
			if($_REQUEST['table'] == 'ativos')
				{								
					$btnVariable = "my-btn my-btn-primary";
					$btnText = "Desativar";
					$data = $users->buscaFuncionarios($_REQUEST['column'],$_REQUEST['permission'], $_REQUEST['order']);		
				}else{
					$btnVariable = "my-btn my-btn-success";
					$btnText = "Ativar";
					$data = $users->buscaFuncionarios($_REQUEST['column'],$_REQUEST['permission'], $_REQUEST['order']);	
				}
				?>
				<thead>
			    	<tr class="table-head">
			       		<th id="id_func-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				       		'<?php echo $_REQUEST['table']?>',
				       		'id_func',
				     		'<?php echo $_REQUEST['permission']?>',
				       		'<?php echo $_REQUEST['order']?>'
			       		)">#</th>
			     		<th id="nome_func-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				     		'<?php echo $_REQUEST['table']?>',
				     		'nome_func',
				     		'<?php echo $_REQUEST['permission']?>',
				     		'<?php echo $_REQUEST['order']?>'
			     		)">Nome</th>
			     		<th id="cpf-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				     		'<?php echo $_REQUEST['table']?>',
				     		'cpf',
				     		'<?php echo $_REQUEST['permission']?>',
				     		'<?php echo $_REQUEST['order']?>'
			     		)">CPF</th>
			      		<th id="tipo_acesso-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				      		'<?php echo $_REQUEST['table']?>',
				      		'tipo_acesso',
				     		'<?php echo $_REQUEST['permission']?>',
				      		'<?php echo $_REQUEST['order']?>'
			      		)">Tipo de Acesso</th>
			      		<th id="email-<?php echo $_REQUEST['table']?>" onclick="orderParameter(
				      		'<?php echo $_REQUEST['table']?>',
				      		'email',
				     		'<?php echo $_REQUEST['permission']?>',
				      		'<?php echo $_REQUEST['order']?>'
			      		)">E-Mail</th>
			      		<th ></th>
			    	</tr>
			  	</thead>
			  	<tbody class="table-body">
				<?php
						
			while($user = mysqli_fetch_array($data)){
		?>
    	<tr>
      		<th scope="row"><?php echo $user['id_func']?></th>
      		<td><?php echo $user['nome_func']?></td>
      		<td><?php echo $user['cpf']?></td>
      		<td><?php echo $user['tipo_acesso']?></td>
      		<td><?php echo $user['email']?></td>
      		<td class="text-center"><button class="<?php echo $btnVariable; ?>" onclick="showPopUp('permission',
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