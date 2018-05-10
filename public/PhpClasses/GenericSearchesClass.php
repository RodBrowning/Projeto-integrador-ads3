<?php

require 'Connection.php';

USE function CRUD\connect as conn;

class Generic
{
	public function selectAllFrom($tableArg){
		$table = $tableArg;
		$query = "SELECT * FROM `$table`";
		$data = mysqli_query(conn(), $query);
		return $data;

	}
}
	
	
?>
