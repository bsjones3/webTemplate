<?php	include 'header.php';?>

	<div class="alert alert-success fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<!-- '#' is a placeholder for a link-->
		<strong>Success!</strong> You have created an account!
	</div>
	<?php
	echo "<p><i>Redirecting to member page...</i></p>";
	//header("Location: /Applications/XAMPP/xamppfiles/htdocs/webTemplate/index.php");
	//add javascript here to add a delay

	//process account credentials
	$userAcc = trim(strtolower($_POST['usern']));
	$pass = $_POST['passw'];

	//add logic here to further sanitize user input and check if it meets requirements

	//prepared statement to connect to db table - try catch
	try{
		//include db connection
		include 'dbConnect.php';

		//encode password fusing secure library functions
		include 'password.php';
		$hash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 10)); //choose BCRYPT algorithm for hashing

		//prepare statement and bind values to unnamed place holders
		$stmt = $con->prepare("INSERT INTO userList (username, password) VALUES (?, ?)");
		$stmt->bindParam(1, $userAcc);
		$stmt->bindParam(2, $hash);
		$stmt->execute(); //debug test
		$con = null;
	}
	catch(PDOException $e)
	{
		echo "ERROR: " . $e->getMessage();
	}//insert into db table - try catch

	//if the session variable is set then inlcude the javascript to redirect to member page
	if (isset($_SESSION)){    ?>
		<script src="js/redirect.js"></script>
	<?php }  ?>

<?php include 'footer.php'?>
