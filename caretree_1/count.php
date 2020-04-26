<?php
	include_once 'p_connection.php';
	function runQuery($query){

		$result = mysqli_query($con,$query);
		$c = mysqli_fetch_assoc($result);
		print_r($c);
		return $c['count'];
	}
	?>