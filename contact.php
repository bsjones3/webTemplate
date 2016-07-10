<?php include 'header.php';?>
<!-- Include JS library TinyMCE to add funcitonality to the textarea -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<div class="container-fluid">
  <h1 class="text-center">CONTACT</h1>
  <hr>
  <h4 class="unq2 text-center">Any questions, comments, concerns</h4>
  <div class="row">
    <div class="col-sm-6">
      <form enctype="text/plain" method="post" class="unq form-inline" action="mailto:test@gmail.com">
        <div class="form-group">
          <label class="control-label" for="in1">Question:</label>
          <input type="text" id="in1" name="question" value="Enter a question" class="form-control">
        </div><br>
        <div class="form-group">
          <label class="control-label" for="in2">Category:</label>
          <input type="text" id="in2" name="category" value="Enter a category" class="form-control">
        </div><br><br>
        <div class="form-group">
          <label class="control-label" for="in3">Message Body:</label>
          <textarea name="textA" id="in3" class="form-control" rows="4">
          </textarea><br>
          <input type="submit" value="Send" class="btn  btn-default">
        </div>
      </form>
    </div>
    <div class="col-sm-6">
      <img src="images/contact.jpg" class="img-responsive img-rounded">
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
