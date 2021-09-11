<?php

echo "Login Page";
include 'bootstrap.php'

?>

<html>

<body>
<div class="container mt-5">

    <form method="post" id="addname" name="addname" action="<?= base_url('index.php/Welcome/login') ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Login</button>
      </div>
    </form>
</div>

    <br><br>
    <a href="<?php echo base_url('index.php/Welcome/index'); ?>">Back to home</a>

</body>
</html>