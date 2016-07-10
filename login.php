<?php include 'header.php';?>
<div class="aBlock">
  <h1><span class="glyphicon glyphicon-log-in"></span>                Login</h1>
  <form action="login.php" method="post" class="form-inline">
    <div class="form-group">
      Username:
      <input type="text" name="userNA" value="Enter User" class="form-control"><br>
    </div><br><br>
    <div class="form-group">
      Password:
      <input type="password" name="passWO" value="Enter Pass" class="form-control"><br>
      <input type="submit" value="submit" class="btn  btn-default">
    </div>
  </form>
</div>
<?php
//start login logic here
if($_SERVER["REQUEST_METHOD"] == "POST"){
  //if values were posted then do below

  //prepared statement to select db credentials
  try{
    //include db connection
    include 'dbConnect.php';

    //encode form password using secure library functions
    include 'password.php';
    $myuser = trim(strtolower($_POST['userNA']));
    $pass = $_POST['passWO'];
    $hash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 10)); //choose BCRYPT algorithm for hashing

    //prepare statement and bind values to unnamed place holders
    $sql = "SELECT username, password  FROM userList WHERE '$myuser' = username";
    $q = $con->prepare($sql);
    $q->execute();
    $row = $q->fetchObject();
    $dbpass = $row->password;
    if(password_verify($_POST['passWO'], $dbpass)){
      echo 'succesfully logged in';
    }
    else{
      echo 'messed up somewhere or invalid password';
    }
  }
  catch(PDOException $e)
  {
    echo "ERROR: " . $e->getMessage();
  }//insert into db table - try catch
}
?>
<?php include 'footer.php'?>
