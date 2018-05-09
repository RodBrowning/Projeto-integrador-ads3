<?php
require 'Conection.php';

class Generic
{
	public function selectAllFrom($conn,$tableArg){
		$table = $tableArg;
		$query = "SELECT * FROM `$table`";
		$conection = $conn;
		$data = mysqli_query($conection, $query);
		return $data;

	}
}
	
	
?>
