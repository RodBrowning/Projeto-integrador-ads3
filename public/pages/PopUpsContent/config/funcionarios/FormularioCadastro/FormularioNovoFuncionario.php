<?php 
	// Importa função "mask()"
	require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/UtilFunctionsPhp.php"); 
?>

<div class="successMessage">
	<fieldset class="col-md-12">
		<legend ">Cadastrar</legend>
		<div class="form-div mt-0">
			<div class="form-cad-func col-lg-12 text-center marginAuto">					
				<div class="display-block">
					<label class="width-label-1">Nome:</label><input class="input-name-func" type="text" id="nome-func">
				</div>
			</div>
			<div class="form-cad-func col-lg-12 marginAuto">					
				<div class="display-block text-center">
					<label class="display-inline-block width-label-1">E-Mail:</label><input class="width-input-2" type="email" id="email">
				
					<label class="display-inline-block width-label-2">Tipo acesso:</label>
						<select class="width-select" id="select">
							<option value="" selected disabled hidden>Select</option>
							<option value="Administrativo">Administrativo</option>
						  	<option value="Operacional">Operacional</option>
						</select>
				</div>
			</div>
			<div class="form-cad-func col-lg-12 marginAuto">					
				<div class="display-block senhas-991 text-center">
					
					<label class="width-label-1">Senha:</label><input class="width-input-3" type="password" maxlength="20" id="senha">							
					<label class="width-label-4">Confirmar Senha:</label><input class="width-input-3" type="password" maxlength="20" id="senhaConfirm">
				</div>
				
			</div>
			<div class="form-cad-func col-lg-10 text-right">	
					<!-- Placeholder para o CPF inserido -->
					<!-- Função "mask()" mascara a string inserindo pontuações-->
					<label class="width-label-3">CPF:</label><span><b id="CPF" <?php echo "value='".$_REQUEST['CPF']."'"?> > <?php echo mask($_REQUEST['CPF'],'###.###.###-##')?></b></span>
			</div>
			<!-- Função "validarNovoFuncionario()" em construção -->
			<div class="form-cad-func col-lg-10 marginAuto">					
				<div class="display-block text-center">
					<div class="display-inline-block">
						<button class="my-btn my-btn-success" onclick="validarNovoFuncionario()" autofocus>Salvar</button>
						<button class="my-btn my-btn-danger" onclick="closePopUp()">Cancelar</button>
					</div>
				</div>
			</div>
		</div>
	</fieldset>			
</div>

