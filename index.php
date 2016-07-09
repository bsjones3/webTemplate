<?php include 'header.php';?>

<div class="container-fluid">
	<div class="jumbotron text-center"><h1>Welcome to the Website Template</h1></div>
	<hr>
	<form action="userAccept.php" method="POST">
		Username:
		<input type="text" name="usern" value="Enter User"><br>

		Password:
		<input type="password" name="passw" value="Enter Pass"><br>
		<input type="submit" value="submit" class="btn  btn-default">
	</form>
</div>
<?php include 'footer.php'?>
