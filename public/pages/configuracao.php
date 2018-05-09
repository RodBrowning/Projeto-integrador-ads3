<?php 
	require '../PhpClasses/Conection.php';
	require '../PhpClasses/ConfigClass/Funcionarios.php';

?>
<div class="row padding-2">
	<div class="col-lg-8 col-9 titleDiv marginAuto">
		<p>Configurações</span></p>
		<hr>
	</div>
	<div class="col-10 marginAuto mb-4">	

			<fieldset>
				<legend>Valores</legend>

				<div class="info-valores col-lg-12 marginAuto mt-2">				
					<p class="col-lg-5 col-md-12">Primeira Hora: R$<span>10,00</span></p>
					<p class="col-lg-5 col-md-12">Demais Horas: R$<span>5,00</span></p>

					<p class="col-lg-5 col-md-12">Valor Diário: R$<span>10,00</span></p>
					<p class="col-lg-5 col-md-12">Valor Mensal: R$<span>5,00</span></p>
					<hr class="linhaPreta">					
				</div>

				<div class="form-div col-lg-11 col-md-10 marginAuto">
					
					<div class="div-update display-block ">
						<p class="display-inline-block ">Primeira Hora: <input type="number" step="any" id="primeira-hora"></p>
						<p class="display-inline-block">Demais Horas: <input type="number" id="demais-hora"></p>
						<div class="button-ajuste-cobranca display-inline-block">
							<button class=" my-btn my-btn-success"  onclick="showPopUp('valor-horas')">Salvar</button>
						</div>
					</div>

					<div class="div-valores-dia-mensal">
						<div class="display-block">
							<p class="display-inline-block ">Valor Diário:</p>	
							<input class="display-inline-block" type="number" step="any">
							<div class="display-inline-block">
								<button class="my-btn my-btn-success" onclick="showPopUp('valor-diario')">Salvar</button>
							</div>
						</div>				

						<div  class="display-block">
							<p class="display-inline-block">Valor Mensal:</p>
							<input class="display-inline-block" type="number" step="any">
							<div class="display-inline-block">
								<button class="my-btn my-btn-success" onclick="showPopUp('valor-mensal')">Salvar</button>
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
							<label class="display-inline-block width-label-1">CFP:</label><input class="width-input-2" type="text" pattern="\d*" maxlength="14" id="CPF" onkeypress="formatar('###.###.###-##',this)">
						
							<label class="display-inline-block width-label-2">Tipo acesso:</label>
								<select class="width-select" id="select">
									<option value="" selected disabled hidden>Select</option>
									<option value="Administrativo">Administrativo</option>
								  	<option value="Operacional">Operacional</option>
								</select>
						</div>
					</div>
					<div class="form-cad-func col-lg-10 marginAuto">					
						<div class="display-block">
							<label class="width-label-1">E-Mail:</label><input class="width-input-2" type="email" id="email">
							<label class="width-label-2">Senha:</label><input class="width-input-1" type="password" maxlength="20" id="senha">							
						</div>
						
					</div>
					<div class="form-cad-func col-lg-10 marginAuto">	
							<label class="width-label-3">Confirmar Senha:</label><input class="width-input-1" type="password" maxlength="20" id="senhaConfirm">
					</div>
					
					<div class="form-cad-func col-lg-10 marginAuto">					
						<div class="display-block">
							<div class="button-cadastro-func display-inline-block">
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
		<p>Funcionários ativos</span></p>
		<hr>		
	</div>
	<div class="col-10 marginAuto">
		<table class="table table-sm table-responsive-xl">
		    <thead>
		    	<tr class="table-head">
		       		<th>#</th>
		     		<th>Nome</th>
		     		<th>CPF</th>
		      		<th>Data Admissão</th>
		      		<th>E-Mail</th>
		      		<th></th>
		    	</tr>
		  	</thead>
		  	<tbody class="table-body">
		  		<?php 
					$users = new Funcionario();
					$data = $users->buscaFuncionariosAtivos($conn);
					while($user = mysqli_fetch_array($data)){
				?>

		    	<tr>
		      		<th scope="row">1</th>
		      		<td><?php echo $user['nome_func']?></td>
		      		<td><?php echo $user['cpf']?></td>
		      		<td><?php echo $user['tipo_acesso']?></td>
		      		<td><?php echo $user['email']?></td>
		      		<td class="text-center"><button class="my-btn my-btn-primary" onclick="showPopUp('desativar')">Desativar</button></td>
		    	</tr>
		    	<?php }?>
		    	
		  	</tbody>
		</table>
	</div>
</div>

<div class="row padding-2">
	<div class="col-lg-8 col-9 titleDiv marginAuto">
		<p>Funcionários inativos</p>
		<hr>		
	</div>
	<div class="col-10 marginAuto">
		<table class="table table-sm table-responsive-xl">
		    <thead>
		    	<tr class="table-head">
		       		<th>#</th>
		     		<th>Nome</th>
		     		<th>CPF</th>
		      		<th>Data Admissão</th>
		      		<th>E-Mail</th>
		      		<th></th>
		    	</tr>
		  	</thead>
		  	<tbody class="table-body">
		  		<?php 
					$users = new Funcionario();
					$data = $users->buscaFuncionariosInativos($conn);
					while($user = mysqli_fetch_array($data)){
				?>
		    	<tr>
		      		<th scope="row">1</th>
		      		<td><?php echo $user['nome_func']?></td>
		      		<td><?php echo $user['cpf']?></td>
		      		<td><?php echo $user['tipo_acesso']?></td>
		      		<td><?php echo $user['email']?></td>
		      		<td class="text-center"><button class="my-btn my-btn-success" onclick="showPopUp('ativar')">Ativar</button></td>
		    	</tr>
		    	<?php }?>
		  	</tbody>
		</table>
	</div>
</div>