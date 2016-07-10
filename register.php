<?php include 'header.php';?>
<div class="aBlock">
  <h1>Create an account</h1>
  <form role="form" action="userAccept.php" method="POST" class="form-inline">
    <div class="form-group">
      Username:
      <input type="text" name="usern" value="Enter User" class="form-control"><br>
    </div><br><br>
    <div class="form-group">
      Password:
      <input type="password" name="passw" value="Enter Pass" class="form-control"><br>
      <input type="submit" value="submit" class="btn  btn-default">
    </div>
  </form>
</div>
<?php include 'footer.php'?>
