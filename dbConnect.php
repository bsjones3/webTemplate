<?php
	$host = "localhost";
	$dbname = "mysql";
	$user = 'root';
	$con = new PDO("mysql:host=$host;dbname=$dbname", $user, '');
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>