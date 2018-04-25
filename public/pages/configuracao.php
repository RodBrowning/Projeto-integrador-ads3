<?php echo $_REQUEST['page']?>
<div class="row padding-2">
	<div class="col-lg-8 col-md-9 titleDiv marginAuto">
		<p>Configurações</span></p>
		<hr>
	</div>
	<div class="col-10 marginAuto mb-4">	

			<fieldset>
				<legend>Valores</legend>

				<div class="info-valores col-lg-12 marginAuto">				
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
							<button class=" my-btn my-btn-success">Salvar</button>
						</div>
					</div>

					<div class="div-valores-dia-mensal">
						<div class="display-block">
							<p class="display-inline-block ">Valor Diário:</p>	
							<input class="display-inline-block" type="number" step="any">
							<div class="display-inline-block">
								<button class="my-btn my-btn-success">Salvar</button>
							</div>
						</div>				

						<div  class="display-block">
							<p class="display-inline-block">Valor Mensal:</p>
							<input class="display-inline-block" type="number" step="any">
							<div class="display-inline-block">
								<button class="my-btn my-btn-success">Salvar</button>
							</div>
						</div>
					</div>

				</div>
			</fieldset>		
					
		
	</div>

		<div class="col-lg-8 col-md-9 titleDiv marginAuto mt-4">
			<p>Cadastro de funcionários</span></p>
			<hr>
		</div>	
		<div class="col-10 marginAuto mb-4">
			<fieldset class="col-md-12">
				<legend ">Cadastrar</legend>
				<div class="form-cad-func col-lg-10 text-center marginAuto">					
					<div class="display-block">
						<label class="width-label-1">Nome:</label><input class="input-name-func" type="text" id="primeira-hora">
					</div>
				</div>
				<div class="form-cad-func col-lg-10 marginAuto">					
					<div class="display-block">
						<label class="display-inline-block width-label-1">CFP:</label><input class="width-input-2" type="text" id="primeira-hora">
					
						<label class="display-inline-block width-label-2">Tipo acesso:</label>
							<select class="width-select">
								<option value="" selected disabled hidden>Select</option>
								<option value="volvo">Volvo</option>
							  	<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
							  	<option value="audi">Audi</option>
							</select>
					</div>
				</div>
				<div class="form-cad-func col-lg-10 marginAuto">					
					<div class="display-block">
						<label class="width-label-1">E-Mail:</label><input class="width-input-2" type="text">
						<label class="width-label-2">Senha:</label><input class="width-input-1" type="text">
					</div>
				</div>
				<div class="form-cad-func col-lg-10 marginAuto">					
					<div class="display-block">
						<div class="button-cadastro-func display-inline-block">
							<button class="my-btn my-btn-success">Salvar</button>
						</div>
					</div>
				</div>
			</fieldset>
		</div>
		</div>
	
	<div class="col-lg-8 col-md-9 titleDiv marginAuto mt-4">
		<p>Funcionários ativos</span></p>
		<hr>		
	</div>
	<div class="col-10 marginAuto">
		<table class="table table-sm table-responsive-lg">
		    <thead>
		    	<tr class="table-head">
		       		<th>#</th>
		     		<th>Nome</th>
		     		<th>Sobrenome</th>
		      		<th>Data Admissão</th>
		    	</tr>
		  	</thead>
		  	<tbody class="table-body">
		    	<tr>
		      		<th scope="row">1</th>
		      		<td>Mark</td>
		      		<td>Otto</td>
		      		<td>@smo</td>
		    	</tr>
		    	<tr>
		      		<th scope="row">2</th>
		     		<td>Jacob</td>
		     		<td>Thornton</td>
		     		<td>@fat</td>
		    	</tr>
		    	<tr>
		      		<th scope="row">3</th>
		      		<td>@fat</td>
		      		<td>Larry the Bird</td>
		      		<td>@twitter</td>
		    	</tr>
		  	</tbody>
		</table>
	</div>
</div>
<div class="row padding-2">
	<div class="col-lg-8 col-md-9 titleDiv marginAuto">
		<p>Funcionários inativos</p>
		<hr>		
	</div>
	<div class="col-10 marginAuto">
		<table class="table table-sm table-responsive-sm">
		    <thead>
		    	<tr class="table-head">
		       		<th>#</th>
		     		<th>Nome</th>
		     		<th>Sobrenome</th>
		      		<th>Data Demissão</th>
		    	</tr>
		  	</thead>
		  	<tbody class="table-body">
		    	<tr>
		      		<th scope="row">1</th>
		      		<td>Mark</td>
		      		<td>Otto</td>
		      		<td>@mdo</td>
		    	</tr>
		    	<tr>
		      		<th scope="row">2</th>
		     		<td>Jacob</td>
		     		<td>Thornton</td>
		     		<td>@fat</td>
		    	</tr>
		    	<tr>
		      		<th scope="row">3</th>
		      		<td>@fat</td>
		      		<td>Larry the Bird</td>
		      		<td>@twitter</td>
		    	</tr>
		  	</tbody>
		</table>
	</div>
</div>