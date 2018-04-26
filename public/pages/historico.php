<?php echo $_REQUEST['page']?>
<div class="row padding-2">
	<div class="col-10 titleDiv marginAuto">
		<div class=".display-block">
			<div class="display-inline-block"><label>Ultimos</label><input type="text" maxlength="3" size="3"> </span> dias <span>
			</div>
			<button class="my-btn-serch">Pesquisar</button>
		</div>
		<hr>
		<div class=".display-block">
			<div class="display-inline-block"><label>De</label><input type="date" name="de"></div>
			<div class="display-inline-block"><label>ate</label><input type="date" name="até"></div>
			<button class="my-btn-serch">Pesquisar</button>
		</div>
		<hr>		
	</div>
	<div class="col-10 marginAuto mt-4">
		<table class="table table-sm table-responsive-xl">
		    <thead>
		    	<tr class="table-head">
		       		<th>#</th>
		     		<th>Placa</th>
		     		<th>Motorista</th>
		      		<th>Data Entrada</th>
		      		<th>Funcionário</th>
		      		<th>Data Saida</th>
		      		<th>Funcionário</th>
		      		<th>Valor</th>
		    	</tr>
		  	</thead>
		  	<tbody class="table-body">
		    	<tr>
		      		<th scope="row">1</th>
		      		<td>JDU4562</td>
		      		<td>Otavio</td>
		      		<td>20/02/2019 - 09:30</td>
		      		<td>Jair</td>
		      		<td>20/02/2019 - 10:20</td>
		      		<td>Jair</td>
		      		<td>R$<span class="valor-pago">1,50</span></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">2</th>
		     		<td>HDJ8294</td>
		      		<td>Bernardo Faria Neto</td>
		      		<td>20/02/2019 - 11:20</td>
		      		<td>Jair</td>
		      		<td>20/02/2019 - 13:50</td>
		      		<td>Jair</td>
		      		<td>R$<span class="valor-pago">1,50</span></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">3</th>
		      		<td>UEM5830</td>
		      		<td>Mauricio Guerra Silva</td>
		      		<td>20/02/2019 - 12:00</td>
		      		<td>Jair</td>
		      		<td>20/02/2019 - 16:50</td>
		      		<td>Nelson</td>
		      		<td>R$<span class="valor-pago">1,50</span></td>
		    	</tr>
		  	</tbody>
		</table>
	</div>
</div>
				
		