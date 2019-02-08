<?php
	error_reporting(0);
	if (!$conn=mysqli_connect("localhost","paperfly_db_root","db_root_123","paperfly_db")){
		$connError='Y';
		}
	error_reporting(E_ALL & ~(E_WARNING|E_NOTICE));	
?>
