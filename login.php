<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" /> 
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" /> 
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap-grid.min.css" /> 
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap-reboot.min.css" /> 
  <link rel="stylesheet" href="css/style.css" /> 
  <title>Document</title>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="mt-5" id="login-wrapper">
        <?php if(isset($_SESSION['error'])) { ?>
          <div id="has-error" class="px-3 py-2 text-white"><i class="fa fa-warning"></i> &nbsp;<?= $_SESSION['error'] ?></div>
          <?php
          session_destroy(); }?>
          <div id="login-form" class="mt-2">
            <div class="row mt-4">
              <div class="col-md-2"></div>
              <div class="col-md-8 text-center">
                <h3><strong>Sign in to workspace.</strong></h3>
                <p>Sign in and be connected to your study buddies!</p>
                <form method="post" action="authenticate.php">
                  <div class="form-group">
                    <input name="username" type="text" class="form-control" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-block btn-outline-success" name='btn-submit'>Login</button>
                  </div>
                </form>
                <p><span>Forgot password?</span> <a href="#"><strong>Recover it here.</strong></a></p>
              </div>
            </div>
          </div>
          <div class="mt-3 text-center" id="register-note">
            Are you not a study buddy yet? <a href="register.php"><strong>Be a part of our community.</strong></a>
          </div>
        </div>
      </div>
    </div>
  </div> 
</body>
</html>