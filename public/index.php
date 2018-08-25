<!DOCTYPE html >
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina de lançamentos</title>

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style-header.css">
	<link rel="stylesheet" type="text/css" href="css/style-header-mobile.css">

	<link rel="stylesheet" type="text/css" href="css/bodyStyle.css">

	<link rel="stylesheet" type="text/css" href="css/pages-styles/style-caixa-mobile.css">

	<link rel="stylesheet" type="text/css" href="css/pages-styles/style-config.css">
	<link rel="stylesheet" type="text/css" href="css/pages-styles/style-config-mobile.css">

</head>

	<div id="pop-ups-div-box"></div>

<body onload="ajaxRequestIndex('lancamento')">
		
		<?php
		//Partial do header
			require('partials/__header.php');
		?>
		<div class="row body">
			<div class="container">
				<div class="col-11 marginAuto">
					<div id="main"  class="mainDiv" >
						
					</div>
				</div>
			</div>	
		</div>
		
		<?php
		///Partial do footer
			include('partials/__footer.php');
		?>
		
	<script type="text/javascript" src="js/script-header.js"></script>	
	<script type="text/javascript" src="js/ajax-function-index.js"></script>

	<script type="text/javascript" src="js/veiculo/operacoes/entradaVeiculo.js"></script>	
	<script type="text/javascript" src="js/veiculo/veiculo-pop-up.js"></script>	
	
	<script type="text/javascript" src="js/caixa/caixa.js"></script>

	<script type="text/javascript" src="js/config/valores/valores.js"></script>
	<script type="text/javascript" src="js/config/funcionarios/novo-func.js"></script>	

	
	<script type="text/javascript" src="js/order_table_parameter.js"></script>
	<script type="text/javascript" src="js/pop-up.js"></script>
	<script type="text/javascript" src="js/config/config-pop-up.js"></script>
	<script type="text/javascript" src="js/config/CRUDRedirectConfig.js"></script>
	<script type="text/javascript" src="js/util.js"></script>
	


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
</body>
</html>


