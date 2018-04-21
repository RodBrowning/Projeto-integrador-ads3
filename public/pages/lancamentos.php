<?php echo $_REQUEST['page']?>
<div class="row padding-2">
	<div class="col-8 titleDiv marginAuto">
		<p>Entrada e saida de veiculos</p>
		<hr>		
	</div>

	<div class="col-10 marginAuto">
		<button class="my-btn my-btn-danger margin-2">NOVA ENTRADA</button>	
	</div>
	<div class="col-10 marginAuto">
		<table class="table table-sm table-responsive-lg">
		    <thead>
		    	<tr class="table-head">
		       		<th>#</th>
		     		<th>Placa</th>
		     		<th>Motorista</th>
		      		<th>Data Entrada</th>
		      		<th>Funcionário</th>
		      		<th></th>
		    	</tr>
		  	</thead>
		  	<tbody class="table-body">
		    	<tr>
		      		<th scope="row">1</th>
		      		<td>JDU4562</td>
		      		<td>Otavio</td>
		      		<td>20/02/2019</td>
		      		<td>Jair</td>
		      		<td><button class="my-btn my-btn-primary">Sair</button></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">2</th>
		     		<td>HDJ8294</td>
		      		<td>Bernardo Faria Neto</td>
		      		<td>20/02/2019</td>
		      		<td>Jair</td>
		      		<td><button class="my-btn my-btn-primary">Sair</button></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">3</th>
		      		<td>UEM5830</td>
		      		<td>Mauricio Guerra Silva</td>
		      		<td>20/02/2019</td>
		      		<td>Jair</td>
		      		<td><button class="my-btn my-btn-primary">Sair</button></td>
		    	</tr>
		  	</tbody>
		</table>
	</div>
</div>