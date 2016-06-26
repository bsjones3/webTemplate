<?php
	include 'header.php';
	echo "<p><i>SUCCESS: Redirecting to home page...</i></p>";
	//header("Location: /Applications/XAMPP/xamppfiles/htdocs/webTemplate/index.php");
	//add javascript here to add a delay

	//process account credentials
	$user = $_POST['usern'];
	$pass = $_POST['passw'];
	
	//prepared statement to connect to db table - try catch
	include 'dbConnect.php';

	//insert into db table - try catch

?>

