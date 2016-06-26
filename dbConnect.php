<?php
	$host = "localhost";
	$dbname = "mysql";
	$admin = 'root';
	try{
		$con = new PDO("mysql:host=$host;dbname=$dbname", $admin, '');
	}
	catch (PDOException $e){
		echo "Error connection to database:" . $e->getMessage();
	}
?>