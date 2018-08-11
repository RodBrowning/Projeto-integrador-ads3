<!-- Modulo tabelas de funcionarios ativos e inativos -->

<div class="row padding-2">
	<div class="col-lg-8 col-9 titleDiv marginAuto">
		<!-- Exibe todos os funcionarios ativos no sistema -->
		<p>Funcionários ativos</span></p>
		<hr>		
	</div>

	<!-- Este div recebe tabelas geradas pela mudança de permição ou pelo reordenamento das colunas -->

	<div class="col-10 marginAuto " id="tabela-ativos">
		<table class="table table-sm table-responsive-xl">
		    
		  		<?php 

		  			// Instancia da classe funcionarios

					$users = new Funcionario;

					// Os valores da função são o padrão para o primeiro acesso a pagina de configuração
					// Eles garantem que nesta tabela haverá dados apenas de funcionarios ativados do sistema

					$data = $users->buscaFuncionarios('id_func','asc','1');
						if(mysqli_num_rows($data) == 0)
							{
								?>
								<h2 class="text-center">Nunhum funcionario ativo</h2>
								<?php
							}else{
								?>
								<thead>

									<!-- As colunas das tabelas são reordenadas com um clique na coluna que se deseja reordenar -->
									<!-- Os valores da função "orderParameter()" são os padrão para o primeiro acesso  -->
									<!-- O ultimo parametro é 1 para que seja retornada uma tabela com funcionarios ativos -->

							    	<tr class="table-head">
							       		<th id="id_func-ativos" onclick="orderParameter('ativos','id_func','desc','1')">#</th>
							     		<th id="nome_func-ativos" onclick="orderParameter('ativos','nome_func','asc','1')">Nome</th>
							     		<th id="cpf-ativos" onclick="orderParameter('ativos','cpf','asc','1')">CPF</th>
							      		<th id="tipo_acesso-ativos" onclick="orderParameter('ativos','tipo_acesso','asc','1')">Data Admissão</th>
							      		<th id="email-ativos" onclick="orderParameter('ativos','email','asc','1')">E-Mail</th>
							      		<th></th>
							    	</tr>
							  	</thead>
							  	<tbody class="table-body">
								<?php
							
					while($user = mysqli_fetch_array($data)){
				?>

		    	<tr>

		    		<!-- A função "showPopUpConfig()" abre uma caixa de confirmação se positivo efetua a alteração no banco de dados e retorna a pagina de configuração atualizando as tabelas automaticamente -->
		    		<!-- Esta função sera chamada nas duas tabelas diferenciando apenas o ultimo valor -->
		    		<!-- Nesta tabela ela envia os dados do funcionario para ser desativado no banco de dados -->

		      		<th scope="row"><?php echo $user['id_func']?></th>
		      		<td><?php echo $user['nome_func']?></td>
		      		<td><?php echo $user['cpf']?></td>
		      		<td><?php echo $user['tipo_acesso']?></td>
		      		<td><?php echo $user['email']?></td>
		      		<td class="text-center"><button class="my-btn my-btn-primary" onclick="showPopUpConfig('permission',
		      			'<?php echo $user['id_func']?>',
		      			'<?php echo $user['nome_func']?>',
		      			'<?php echo $user['cpf']?>',
		      			'<?php echo $user['tipo_acesso']?>',
		      			'<?php echo $user['email']?>',
		      			'0')">Desativar</button></td>
		    	</tr>
		    	<?php }
		    			}?>
		    	
		  	</tbody>
		</table>
	</div>
</div>

<div class="row padding-2">
	<div class="col-lg-8 col-9 titleDiv marginAuto">
		<!-- Exibe todos os funcionarios inativos no sistema -->
		<p>Funcionários inativos</p>
		<hr>		
	</div>
	<div class="col-10 marginAuto" id="tabela-inativos">
		<table class="table table-sm table-responsive-xl">
		
		  		<?php 
					$users = new Funcionario;

					// Os valores da função são o padrão para o primeiro acesso a pagina de configuração
					// Eles garantem que nesta tabela haverá dados apenas de funcionarios desativados do sistema

					$data = $users->buscaFuncionarios('id_func', 'asc', '0');
						if(mysqli_num_rows($data) == 0)
								{
									?>
									<h2 class="text-center">Nunhum funcionario inativo</h2>
									<?php
								}else{
									?>
									<thead>
											
										<!-- As colunas das tabelas são reordenadas com um clique na coluna que se deseja reordenar -->
										<!-- Os valores da função "orderParameter()" são os padrão para para o primeiro acesso  -->
										<!-- O ultimo parametro e 0 para que seja retornada uma tabela com funcionarios inativos -->
			
								    	<tr class="table-head">
								       		<th id="id_func-inativos" onclick="orderParameter('inativos','id_func','desc','0')">#</th>
								     		<th id="nome_func-inativos" onclick="orderParameter('inativos','nome_func','asc','0')">Nome</th>
								     		<th id="cpf-inativos" onclick="orderParameter('inativos','cpf','asc','0')">CPF</th>
								      		<th id="tipo_acesso-inativos" onclick="orderParameter('inativos','tipo_acesso','asc','0')">Data Admissão</th>
								      		<th id="email-inativos" onclick="orderParameter('inativos','email','asc','0')">E-Mail</th>
								      		<th></th>
								    	</tr>
								  	</thead>
								  	<tbody class="table-body">
									<?php
								
					while($user = mysqli_fetch_array($data)){
				?>
		    	<tr>		    		

		    		<!-- Esta tabela envia os dados do funcionario para ser ativado no banco de dados -->

		      		<th scope="row"><?php echo $user['id_func']?></th>
		      		<td><?php echo $user['nome_func']?></td>
		      		<td><?php echo $user['cpf']?></td>
		      		<td><?php echo $user['tipo_acesso']?></td>
		      		<td><?php echo $user['email']?></td>
		      		<td class="text-center"><button class="my-btn my-btn-success" onclick="showPopUpConfig('permission',
		      			'<?php echo $user['id_func']?>',
		      			'<?php echo $user['nome_func']?>',
		      			'<?php echo $user['cpf']?>',
		      			'<?php echo $user['tipo_acesso']?>',
		      			'<?php echo $user['email']?>',
		      			'1')">Ativar</button></td>
		    	</tr>
		    	<?php }}?>
		  	</tbody>
		</table>
	</div>
</div>