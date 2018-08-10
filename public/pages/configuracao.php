<?php 
	

	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/ConfigClass/Funcionarios.php");
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/GenericSearchesClass.php");

?>
<div class="row padding-2">
	<div class="col-lg-8 col-9 titleDiv marginAuto">
		<p>Configurações</span></p>
		<hr>
	</div>
	<div class="col-10 marginAuto mb-4">	
			<!-- Caixa para definição de valores -->
			<fieldset>
				<legend>Valores</legend>
				<?php 

					// Cria uma instancia da classe que retornara os valores armazenados no banco 		
					// Esta classe esta localizada na pasta "public/pages/PhpClasses/GenericSearchesClass.php"

					$valores = new Generic;
					$valoresArray = $valores->selectAllFrom('valores');
					while ($row = mysqli_fetch_array($valoresArray)) {
						
					?>
				<div class="info-valores col-lg-12 marginAuto mt-2">				
					<p class="col-lg-5 col-md-12">Primeira Hora: R$<span><?php echo $row['primeira_hora']?></span></p>
					<p class="col-lg-5 col-md-12">Demais Horas: R$<span><?php echo $row['demais_horas']?></span></p>

					<p class="col-lg-5 col-md-12">Valor Diário: R$<span><?php echo $row['diaria']?></span></p>
					<p class="col-lg-5 col-md-12">Valor Mensal: R$<span><?php echo $row['mensal']?></span></p>
					<hr class="linhaPreta">					
				</div>
					<?php }	?>
				<div class="form-div col-lg-11 col-md-10 marginAuto">
					
					<div class="div-update display-block ">
						<p class="display-inline-block ">Primeira Hora: <input type="number" step="any" id="primeira-hora"></p>
						<p class="display-inline-block">Demais Horas: <input type="number" id="demais-horas"></p>
						<div class="button-ajuste-cobranca display-inline-block">
							<!-- A função "validarValores()" esta localizada no arquivo "public/js/config/valores/valores.js" -->
							<button class=" my-btn my-btn-success"  onclick="validarValores('update-valores-horas')">Salvar</button>
						</div>
					</div>

					<div class="div-valores-dia-mensal">
						<div class="display-block">
							<p class="display-inline-block ">Valor Diário:</p>	
							<input class="display-inline-block" type="number" step="any" id="valor-diario">
							<div class="display-inline-block">
								<button class="my-btn my-btn-success" onclick="validarValores('update-valores-diario')">Salvar</button>
							</div>
						</div>				

						<div  class="display-block">
							<p class="display-inline-block">Valor Mensal:</p>
							<input class="display-inline-block" type="number" step="any" id="valor-mensal">
							<div class="display-inline-block">
								<button class="my-btn my-btn-success" onclick="validarValores('update-valores-mensal')">Salvar</button>
							</div>
						</div>
					</div>

				</div>
			</fieldset>		
					
		
	</div>

		<div class="col-lg-8 col-9 titleDiv marginAuto mt-4">
			<p>Cadastro de funcionários</span></p>
			<hr>
		</div>	
		<div class="col-10 marginAuto">
			<!-- Exibe caixa para entrada do CPF -->
			<fieldset class="col-md-12">				
					<legend ">Cadastrar Funcionario</legend>
					<div class="form-cad-func col-lg-10 text-center">	
							<label class="width-label-3">CPF:</label><input class="width-input-1" type="text" placeholder="xxx.xxx.xxx-xx" maxlength="14" name="CPF" id="CPF" onkeypress="formatar('###.###.###-##',this)">
							<div class="display-inline-block ml-2">
								<button type="submit" onclick="formatCPF(CPF)" class="my-btn my-btn-success">Validar CPF</button>
							</div>
					</div>
			</fieldset>
			<!-- Caixa será exibida caso o CPF nao seja encontrado no banco -->
			<fieldset class="col-md-12">
				<legend ">Cadastrar</legend>
				<div class="form-div mt-0">
					<div class="form-cad-func col-lg-10 text-center marginAuto">					
						<div class="display-block">
							<label class="width-label-1">Nome:</label><input class="input-name-func" type="text" id="nome-func">
						</div>
					</div>
					<div class="form-cad-func col-lg-10 marginAuto">					
						<div class="display-block">
							<label class="display-inline-block width-label-1">E-Mail:</label><input class="width-input-2" type="email" id="email">
						
							<label class="display-inline-block width-label-2">Tipo acesso:</label>
								<select class="width-select" id="select">
									<option value="" selected disabled hidden>Select</option>
									<option value="Administrativo">Administrativo</option>
								  	<option value="Operacional">Operacional</option>
								</select>
						</div>
					</div>
					<div class="form-cad-func col-lg-10 marginAuto">					
						<div class="display-block senhas-991">
							
							<label class="width-label-1">Senha:</label><input class="width-input-3" type="password" maxlength="20" id="senha">							
							<label class="width-label-4">Confirmar Senha:</label><input class="width-input-3" type="password" maxlength="20" id="senhaConfirm">
						</div>
						
					</div>
					<div class="form-cad-func col-lg-10 text-right">	
							<!-- Placeholder para o CPF inserido -->
							<label class="width-label-3">CPF:</label><span>8478374837</span>
					</div>
					
					<div class="form-cad-func col-lg-10 marginAuto">					
						<div class="display-block">
							<div class="button-cadastro-func display-inline-block">
								<button class="my-btn my-btn-danger">Cancelar</button>
								<button class="my-btn my-btn-success" onclick="validarNovoFuncionario()">Salvar</button>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
	</div>	
</div>

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
									<!-- Os valores da função "orderParameter()" são os padrões para primera vez que a pagina é acessada  -->
									<!-- O ultimo parametro e 1 para que seja retornada uma tabela com funcionarios ativos -->

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
										<!-- Os valores da função "orderParameter()" são os padrões para primera vez que a pagina é acessada  -->
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

		    		<!-- Nesta tabela ela envia os dados do funcionario para ser ativado no banco de dados -->

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