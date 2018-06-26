<?php

namespace CRUD;

	function connect()
		{
			$dbhost = "localhost";
			$userName = "root";
			$password = "";
			$database = "estacionamento";

			$conn = mysqli_connect($dbhost,$userName,$password,$database);
			return $conn;
		}
	


?>