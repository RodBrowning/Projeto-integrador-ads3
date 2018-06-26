<div class="col-md-11 marginAuto mt-3 mb-4">
	<fieldset >
		<legend>Salvar Novos Valores</legend>			
			<div class="col-md-11 marginAuto divLancamento marginAuto">
				<div>
					<p class="display-inline-block">Valor Mensal:</p>
					<b><p class="display-inline-block" id="nome"><?php echo $_REQUEST['valorMensal']?></p></b>				
				</div>
				
				<button onclick="closePopUp()" class="my-btn my-btn-danger mb-3">Cancelar</button>				
				<button onclick="Crud('update-valores-mensal',
		      			'<?php echo $_REQUEST['valorMensal']?>')" class="my-btn my-btn-success mb-3">Salvar</button>				
				
			</div>
	</fieldset>
</div>