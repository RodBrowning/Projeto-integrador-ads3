<!-- Modulo definição de valores de cobrança -->
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
</div>

		
