<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina de lançamentos</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style-header.css">
	<link rel="stylesheet" type="text/css" href="css/style-header-mobile.css">

	<link rel="stylesheet" type="text/css" href="css/bodyStyle.css">

	<link rel="stylesheet" type="text/css" href="css/pages-styles/style-caixa-mobile.css">

	<link rel="stylesheet" type="text/css" href="css/pages-styles/style-config.css">
	<link rel="stylesheet" type="text/css" href="css/pages-styles/style-config-mobile.css">

</head>
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
	<script type="text/javascript" src="js/caixa/caixa.js"></script>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>
</html>


