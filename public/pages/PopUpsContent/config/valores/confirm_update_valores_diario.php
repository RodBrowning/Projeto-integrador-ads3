<div>
	<fieldset >
		<legend>Salvar Novos Valores</legend>			
			<div class="col-md-11 marginAuto divLancamento marginAuto">
				<div>
					<p class="display-inline-block">Valor Diário:</p>
					<b><p class="display-inline-block" id="nome"><?php echo $_REQUEST['valorDiario']?></p></b>				
				</div>
				
				<button onclick="closePopUp()" class="my-btn my-btn-danger mb-3">Cancelar</button>				
				<button onclick="CrudConfig('update-valores-diario',
		      			'<?php echo $_REQUEST['valorDiario']?>')" class="my-btn my-btn-success mb-3">Salvar</button>				
				
			</div>
	</fieldset>
</div>