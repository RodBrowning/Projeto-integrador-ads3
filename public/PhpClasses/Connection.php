<?php
namespace CRUD;

	function connect()
		{
			$dbhost = "localhost";
			$userName = "root";
			$password = "";
			$database = "estacionamento";

			return mysqli_connect($dbhost,$userName,$password,$database);		
		}
	


?>