
<div class="col-md-11 marginAuto mt-3 mb-4">
	<fieldset >
		<legend>Salvar Novos Valores</legend>			
			<div class="col-md-11 marginAuto divLancamento marginAuto">
				<div>
					<p class="display-inline-block">Valor por Hora:</p>
					<b><p class="display-inline-block" id="nome"><?php echo $_REQUEST['primeiraHora']?></p></b>
					<p class="display-inline-block">Demais Horas:</p>
					<b><p class="display-inline-block" id="nome"><?php echo $_REQUEST['demaisHoras']?></p></b>
				</div>
				
				<button onclick="closePopUp()" class="my-btn my-btn-danger mb-3">Cancelar</button>				
				<button onclick="CrudConfig('update-valores-horas',
		      			'<?php echo $_REQUEST['primeiraHora']?>',
		      			'<?php echo $_REQUEST['demaisHoras']?>')" class="my-btn my-btn-success mb-3">Salvar</button>				
				
			</div>
	</fieldset>
</div>