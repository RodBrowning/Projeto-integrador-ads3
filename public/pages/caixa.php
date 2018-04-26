<?php echo $_REQUEST['page']?>
<div class="row padding-2">
	<div class="col-8 titleDiv marginAuto">
		<p>Valor em caixa: <span>R$1.500,00</span></p>
		<hr>		
	</div>

	<div class="col-10 marginAuto btn-caixa">
		<button class="my-btn my-btn-danger margin-2">DEBITO</button>	
		<button class="my-btn my-btn-success margin-2">CREDITO</button>
	</div>
	<div class="col-10 marginAuto">
		<table class="table table-sm table-responsive-lg">
		    <thead>
		    	<tr class="table-head">
		       		<th>#</th>
		     		<th>Funcionario</th>
		     		<th>Operação</th>
		      		<th>Valor</th>
		      		<th>Data Operação</th>
		    	</tr>
		  	</thead>
		  	<tbody class="table-body">
		    	<tr>
		      		<th scope="row">1</th>
		      		<td>Mark</td>
		      		<td class="entrada">Entrada</td>
		      		<td>@smo</td>
		      		<td>@smo</td>
		    	</tr>
		    	<tr>
		      		<th scope="row">2</th>
		     		<td>Jacob</td>
		     		<td class="saida">Saida</td>
		     		<td>@fat</td>
		     		<td>@smo</td>
		    	</tr>
		    	<tr>
		      		<th scope="row">3</th>
		      		<td>@fat</td>
		      		<td class="entrada">Entrada</td>
		      		<td>@twitter</td>
		      		<td>@smo</td>
		    	</tr>
		  	</tbody>
		  	<tfoot>
		  		<tr>
		  			<td colspan="3" style="border:0px;"></td>
		  			<td class="saldo">Total</td>
		  			<td class="saldo">R$<span id="saldo">20,50</span></td>
		  		</tr>
		  	</tfoot>
		</table>
	</div>
</div>
<div class="row padding-2">
	<div class="col-8 titleDiv marginAuto">
		<p>Histórico do dia</p>
		<hr>		
	</div>
	<div class="col-10 marginAuto">
		<table class="table table-sm table-responsive-lg">
		    <thead>
		    	<tr class="table-head">
		       		<th>#</th>
		     		<th>Placa</th>
		     		<th>Motorista</th>
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
		      		<td>20/02/2019 - 10:20</td>
		      		<td>Jair</td>
		      		<td>R$<span class="valor-pago">1,50</span></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">2</th>
		     		<td>HDJ8294</td>
		      		<td>Bernardo Faria Neto</td>
		      		<td>20/02/2019 - 13:50</td>
		      		<td>Jair</td>
		      		<td>R$<span class="valor-pago">1,50</span></td>
		    	</tr>
		    	<tr>
		      		<th scope="row">3</th>
		      		<td>UEM5830</td>
		      		<td>Mauricio Guerra Silva</td>
		      		<td>20/02/2019 - 16:50</td>
		      		<td>Nelson</td>
		      		<td>R$<span class="valor-pago">1,50</span></td>
		    	</tr>
		  	</tbody>
		</table>
	</div>
</div>				

