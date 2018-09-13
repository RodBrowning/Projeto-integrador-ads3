<?php require($_SERVER["DOCUMENT_ROOT"]."/pi/public/PhpClasses/UtilFunctionsPhp.php"); ?>
	
	<fieldset class="col-md-12">
		<legend ">Cadastrar</legend>
		<div class="successMessage divLancamento form-div">
			<!-- Função "mask()" mascara a string inserindo pontuações-->
			<h5>Confirme o numero do CPF: <br /> <b><?php echo mask($_REQUEST['CPF'],'###.###.###-##')?></b></h5>
			<div style="padding: 5px">
				<button type="button" autofocus class="my-btn my-btn-success marginAuto" onclick="showPopUpConfig('Func-Form',<?php echo $_REQUEST['CPF']?>)">OK</button>
				<button class="my-btn my-btn-danger marginAuto" onclick="closePopUp()">Cancelar</button>
			</div>
		</div>
	</fieldset>