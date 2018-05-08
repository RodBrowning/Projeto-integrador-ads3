<?php

	


	if(isset($_REQUEST['operacao']) && !empty($_REQUEST['operacao']))
		{
			switch($_REQUEST['operacao'])
				{
					case 'entrada':
							$entrada = '../pages/PopUpsContent/nova_entrada.php';
							header("location:$entrada");							
						break;
					case 'debito':
							$entrada = '../pages/PopUpsContent/novo_debito.php';
							header("location:$entrada");							
						break;
					case 'credito':
							$entrada = '../pages/PopUpsContent/novo_credito.php';
							header("location:$entrada");							
						break;
				}
			

		}else{
			echo "Something went wrong";
		}
?>
