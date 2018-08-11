<!-- Modulo cadastro de funcionarios -->
<div class="row padding-2">
	<div class="col-lg-8 col-9 titleDiv marginAuto">
				<p>Cadastro de funcionários</span></p>
				<hr>
	</div>	
	<div class="col-10 marginAuto mb-4">
		<!-- Exibe caixa para entrada do CPF -->
		<fieldset class="col-md-12">				
				<legend ">Cadastrar Funcionario</legend>
				<div class="form-cad-func col-lg-10 text-center">	
						<label class="width-label-3">CPF:</label><input class="width-input-1" type="text" placeholder="xxx.xxx.xxx-xx" maxlength="14" name="CPF" id="CPF" onkeypress="formatar('###.###.###-##',this)">
						<div class="display-inline-block">
							<button type="submit" onclick="formatCPF(CPF)" class="my-btn my-btn-success">Validar CPF</button>
						</div>
				</div>
		</fieldset>			
	</div>
</div>