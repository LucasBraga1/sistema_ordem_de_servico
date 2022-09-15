<?php
	$conn = new MySqli("localhost", "root", "", "os");

	function ExibeData($data){
		return  date("d/m/Y", strtotime($data));
	}
?>