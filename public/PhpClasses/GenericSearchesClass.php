<?php

require 'Connection.php';

USE function CRUD\connect as conn;

class Generic
{
	public function selectAllFrom($tableArg){
		$table = $tableArg;
		$query = "SELECT * FROM `$table`";
		
		return mysqli_query(conn(), $query);
		mysqli_close(conn());

	}
}
	
	
?>
